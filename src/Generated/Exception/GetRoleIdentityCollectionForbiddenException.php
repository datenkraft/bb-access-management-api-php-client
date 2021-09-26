<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception;

class GetRoleIdentityCollectionForbiddenException extends ForbiddenException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Forbidden', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}