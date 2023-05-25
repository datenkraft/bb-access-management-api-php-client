<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint;

class GetRoleIdentityCollection extends \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Get all role to identity assignments from every microservice
     *
     * @param array $queryParameters {
     *     @var string $filter[identityId] Filter the response for an identityId (uuid).
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/role-identity';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('filter[identityId]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('filter[identityId]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource[]|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\RoleIdentityResource[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\GetRoleIdentityCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}