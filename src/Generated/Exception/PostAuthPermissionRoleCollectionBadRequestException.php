<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception;

class PostAuthPermissionRoleCollectionBadRequestException extends BadRequestException
{
    /**
     * @var \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}