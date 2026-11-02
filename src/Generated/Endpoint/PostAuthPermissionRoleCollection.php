<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint;

class PostAuthPermissionRoleCollection extends \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Create one or more role to permission assignments in this resource server
     * @param \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     */
    public function __construct(array $requestBody)
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
        return '/auth/permission-role';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRoleResource) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $this->deserializeListResponse($serializer, $body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRoleResource[]', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
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