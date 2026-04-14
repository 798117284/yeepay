<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class AddUserBankcardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankCardAddRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddRespDTO';
    }

    /**
     * @param BankCardAddRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankCardAddRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
