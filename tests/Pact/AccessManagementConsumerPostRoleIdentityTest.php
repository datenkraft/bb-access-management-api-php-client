<?php

namespace Pact;

use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource;
use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\AccessManagementApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AccessManagementConsumerPostRoleIdentityTest
 * @package Pact
 */
class AccessManagementConsumerPostRoleIdentityTest extends AccessManagementConsumerTest
{
    protected string $identityIdAlreadyExists;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->token = getenv('VALID_TOKEN_ROLE_IDENTITY_POST');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->identityId = '11111111-1111-1111-1111-111111111111';
        $this->identityIdAlreadyExists = '11111111-1111-1111-1111-111111111112';

        $this->requestData = [
            'roleCode' => $this->roleCode,
            'identityId' => $this->identityId,
        ];
        $this->responseData = $this->requestData;

        $this->path = '/role-identity';
    }

    public function testPostRoleIdentitySuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder->given('The request is valid, the token is valid and has a valid scope')->uponReceiving(
            'Successful POST request to /role-identity'
        );

        $this->beginTest();
    }

    public function testPostRoleIdentityUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostRoleIdentityForbidden(): void
    {
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder->given('The token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostRoleIdentityBadRequest(): void
    {
        // identityId is empty
        $this->requestData['identityId'] = '';

        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPostIdentityConflict(): void
    {
        // role to identity assignment already exists
        $this->requestData['identityId'] = $this->identityIdAlreadyExists;

        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The role to identity relation already exists')
            ->uponReceiving('Conflicted POST request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostIdentityUnprocessableEntity(): void
    {
        // role does not exist
        $this->requestData['roleCode'] = 'invalid_role_code';

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A role with the given roleCode does not exist')
            ->uponReceiving('Unprocessable POST request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }


    /**
     * @throws AuthException
     * @throws ConfigException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        $roleIdentity = (new RoleIdentityResource())
            ->setRoleCode($this->requestData['roleCode'])
            ->setIdentityId($this->requestData['identityId']);

        return $client->postRoleIdentity($roleIdentity, Client::FETCH_RESPONSE);
    }
}
