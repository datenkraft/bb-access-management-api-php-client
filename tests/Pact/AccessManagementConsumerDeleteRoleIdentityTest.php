<?php

namespace Pact;

use Datenkraft\Backbone\Client\AccessManagementApi\Client;
use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource;
use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AccessManagementConsumerDeleteRoleIdentityTest
 * @package Pact
 */
class AccessManagementConsumerDeleteRoleIdentityTest extends AccessManagementConsumerTest
{
    protected string $identityIdDoesNotExists;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'DELETE';

        $this->token = getenv('VALID_TOKEN_ROLE_IDENTITY_DELETE');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->identityId = '11111111-1111-1111-1111-111111111113';
        $this->identityIdDoesNotExists = '11111111-1111-1111-1111-111111111114';

        $this->requestData = [
            'roleCode' => $this->roleCode,
            'identityId' => $this->identityId,
        ];
        $this->responseData = $this->requestData;

        $this->path = '/role-identity';
    }

    public function testDeleteRoleIdentitySuccess(): void
    {
        $this->expectedStatusCode = '204';

        $this->builder
            ->given(
                'A Role Identity relation with roleCode and identityId exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful DELETE request to /role-identity');

        $this->beginTest();
    }

    public function testDeleteRoleIdentityBadRequest(): void
    {
        // IdentityId is not a valid uuid
        $this->requestData['identityId'] = 'invalid_uuid';

        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The identityId in the request is invalid')
            ->uponReceiving('Bad DELETE request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }


    public function testDeleteRoleIdentityUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized DELETE request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testDeleteRoleIdentityForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token has an invalid scope')
            ->uponReceiving('Forbidden DELETE request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testDeleteRoleIdentityUnprocessableEntity(): void
    {
        // Role Identity relation with roleCode and identityId does not exist
        $this->requestData['identityId'] = $this->identityIdDoesNotExists;

        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A Role Identity relation with roleCode and identityId does not exist')
            ->uponReceiving('Unprocessable DELETE request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @return ResponseInterface
     * @throws ConfigException
     * @throws AuthException
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

        return $client->deleteRoleIdentity($roleIdentity, Client::FETCH_RESPONSE);
    }
}
