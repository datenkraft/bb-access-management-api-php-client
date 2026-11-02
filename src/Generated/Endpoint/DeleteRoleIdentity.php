<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint;

class DeleteRoleIdentity extends \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Delete a role to identity assignment in target resource server
     * @param \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
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
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityBadRequestException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityNotFoundException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (204 === $status) {
            return null;
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteRoleIdentityInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
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