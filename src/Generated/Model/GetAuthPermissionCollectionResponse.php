<?php

namespace Datenkraft\Backbone\Client\AccessManagementApi\Generated\Model;

class GetAuthPermissionCollectionResponse
{
    /**
     * 
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * 
     *
     * @var AuthPermissionResource[]
     */
    protected $data;
    /**
     * 
     *
     * @return CollectionPagination
     */
    public function getPagination() : CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param CollectionPagination $pagination
     *
     * @return self
     */
    public function setPagination(CollectionPagination $pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * 
     *
     * @return AuthPermissionResource[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param AuthPermissionResource[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}