<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierQueryProgressV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplySupplierProgressRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierProgressRespDTO';
    }

    /**
     * @param ApplySupplierProgressRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplySupplierProgressRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
