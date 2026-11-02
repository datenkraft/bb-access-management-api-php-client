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
        $normalizer = match ($normalizerClass) {
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuditLogNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuditLogNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuditLogCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuditLogCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionResourceNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\AuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\CollectionNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\CollectionNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\CollectionPaginationNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\CollectionPaginationNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorReferencesItemNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorResponseNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\ErrorResponseNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\GetRoleCollectionResponseNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\GetRoleCollectionResponseNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\InformationNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\InformationNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\InformationResponseNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\InformationResponseNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\NewAuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleIdentityCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleIdentityCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleIdentityResourceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleIdentityResourceNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer\RoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class => new \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}