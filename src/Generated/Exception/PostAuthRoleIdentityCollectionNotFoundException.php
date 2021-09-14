<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception;

class PostAuthRoleIdentityCollectionNotFoundException extends NotFoundException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Not Found', 404);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}