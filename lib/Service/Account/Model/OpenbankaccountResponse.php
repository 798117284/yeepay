<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class OpenbankaccountResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankClearOpenRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenRespDTO';
    }

    /**
     * @param BankClearOpenRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankClearOpenRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
