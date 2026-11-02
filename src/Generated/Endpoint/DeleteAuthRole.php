<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Endpoint;

class DeleteAuthRole extends \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\Endpoint
{
    protected $roleCode;
    /**
     * Delete a role for this resource server
     * @param string $roleCode Identifier for the role
     */
    public function __construct(string $roleCode)
    {
        $this->roleCode = $roleCode;
    }
    use \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{roleCode}'], [rawurlencode($this->roleCode)], '/auth/role/{roleCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
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
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse', 'json'), $response);
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