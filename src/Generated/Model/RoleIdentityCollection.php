<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model;

use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalPropertiesInterface;
class RoleIdentityCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var CollectionPagination
     */
    public CollectionPagination $pagination;
    /**
     * @var list<RoleIdentityResource>
     */
    public array $data;
    public function definedProperties(): array
    {
        return ['pagination' => 'pagination', 'data' => 'data'];
    }
}