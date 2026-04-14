<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankClearChangeCardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankClearChangeBindCardRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardRspDTO';
    }

    /**
     * @param BankClearChangeBindCardRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankClearChangeBindCardRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
