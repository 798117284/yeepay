<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankclerapplyrecordResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankClearAccountOpenApplyVoDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankClearAccountOpenApplyVoDTO';
    }

    /**
     * @param BankClearAccountOpenApplyVoDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankClearAccountOpenApplyVoDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
