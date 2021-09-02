<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\AccessManagementApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SKUUsageConsumerGetTaskTest
 * @package Pact
 */
class AccessManagementConsumerGetRoleIdentityCollectionTest extends AccessManagementConsumerTest
{
    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('VALID_TOKEN_ROLE_IDENTITY_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->requestData = [];
        $this->responseData = $this->matcher->eachLike(
            [
                'roleCode' => 'test_role_1',
                'identityId' => $this->matcher->uuid(),
            ]
        );

        $this->path = '/role-identity';
    }

    public function testGetRoleIdentityCollectionSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder->given('The request is valid, the token is valid and has a valid scope')->uponReceiving('Successful GET request to /role-identity');

        $this->beginTest();
    }

    public function testGetRoleIdentityCollectionUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder->given('The token is invalid')->uponReceiving('Unauthorized GET request to /role-identity');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetRoleIdentityCollectionForbidden(): void
    {
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder->given('The token is valid with an invalid scope')->uponReceiving('Forbidden GET request to /role-identity');

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

        return $client->getRoleIdentityCollectionEndpoint(Client::FETCH_RESPONSE);
    }
}
