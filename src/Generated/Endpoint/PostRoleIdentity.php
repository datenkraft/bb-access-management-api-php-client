<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint;

class PostRoleIdentity extends \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Create a role to identity assignments in the target resource server
     * @param \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/role-identity';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityNotFoundException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityConflictException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityConflictException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostRoleIdentityInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}