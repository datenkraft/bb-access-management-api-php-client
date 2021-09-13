<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated;

class Client extends \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint\GetAuthRoleCollectionEndpoint(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleIdentityCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint\GetAuthRoleIdentityCollectionEndpoint(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointNotFoundException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointConflictException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint\PostAuthRoleIdentityCollectionEndpoint(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format (yaml or json, fallback is json)
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleResource[]|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getRoleCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint\GetRoleCollectionEndpoint(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource[]|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getRoleIdentityCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint\GetRoleIdentityCollectionEndpoint(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/UNDEFINED');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}