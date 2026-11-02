<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model;

use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalPropertiesInterface;
class AuthPermissionResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Permission Code
     *
     * @var string
     */
    public string $permissionCode;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['permissionCode' => 'permissionCode', 'name' => 'name'];
    }
}