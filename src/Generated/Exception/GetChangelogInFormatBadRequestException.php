<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception;

class GetChangelogInFormatBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid format');
    }
}