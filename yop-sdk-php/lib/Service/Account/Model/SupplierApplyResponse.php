<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplySupplierRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRespDTO';
    }

    /**
     * @param ApplySupplierRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplySupplierRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
