<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Exception;

class GetAuditLogCollectionInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Server error');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}