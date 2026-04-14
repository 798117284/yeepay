<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierPayOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO';
    }

    /**
     * @param RemitRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
