<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitOrderQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderQueryRespDTO';
    }

    /**
     * @param RemitOrderQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitOrderQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
