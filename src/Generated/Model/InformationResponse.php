<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model;

use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AccessManagementApi\Generated\Runtime\AdditionalPropertiesInterface;
class InformationResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * information
     *
     * @var list<Information>
     */
    public array $information;
    public function definedProperties(): array
    {
        return ['information' => 'information'];
    }
}