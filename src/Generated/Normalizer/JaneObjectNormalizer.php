<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\RoleResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\RoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Model\\RoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Normalizer\\RoleIdentityResourceNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\AccessManagementApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
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