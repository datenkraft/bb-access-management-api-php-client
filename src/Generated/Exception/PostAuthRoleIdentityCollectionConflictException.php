<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception;

class PostAuthRoleIdentityCollectionConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}