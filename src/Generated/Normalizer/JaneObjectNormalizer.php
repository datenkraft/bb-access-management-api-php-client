<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\GetRoleCollectionResponse::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\GetRoleCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityCollection::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleIdentityCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleResource::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleResourceNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuditLog::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuditLogCollection::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionResource::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthPermissionRoleResource::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleCollection::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\AuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\GetRoleCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityCollection::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\RoleResource::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}