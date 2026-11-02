<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model;

use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalPropertiesInterface;
class RoleIdentityResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Role Code
     *
     * @var string
     */
    public string $roleCode;
    /**
     * Identity ID
     *
     * @var string
     */
    public string $identityId;
    public function definedProperties(): array
    {
        return ['roleCode' => 'roleCode', 'identityId' => 'identityId'];
    }
}