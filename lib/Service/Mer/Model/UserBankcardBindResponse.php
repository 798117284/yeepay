<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class UserBankcardBindResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankCardBindRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindRespDTO';
    }

    /**
     * @param BankCardBindRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankCardBindRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
