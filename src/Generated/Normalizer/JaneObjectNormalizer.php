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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\RoleResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\RoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\RoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\RoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuditLogCollection' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuditLogCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuditLog' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuditLogNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\NewAuthRoleResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\NewAuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuthPermissionRoleResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuthPermissionRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\InformationResponse' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\InformationResponseNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\Information' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\InformationNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\ErrorNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
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
}