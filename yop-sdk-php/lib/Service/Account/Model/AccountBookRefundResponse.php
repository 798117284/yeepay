<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookRefundResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookRefundRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundRespDTO';
    }

    /**
     * @param AccountBookRefundRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookRefundRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
