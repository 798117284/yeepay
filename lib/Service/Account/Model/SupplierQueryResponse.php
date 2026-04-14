<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QuerySupplierRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QuerySupplierRespDTO';
    }

    /**
     * @param QuerySupplierRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QuerySupplierRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
