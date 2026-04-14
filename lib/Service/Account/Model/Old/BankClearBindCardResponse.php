<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;


class BankClearBindCardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankClearBindCardRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankClearBindCardRspDTO';
    }

    /**
     * @param BankClearBindCardRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankClearBindCardRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
