<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception;

class GetAuthPermissionCollectionUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}