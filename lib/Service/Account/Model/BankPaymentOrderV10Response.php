<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankPaymentOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountPaymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRespDto';
    }

    /**
     * @param BankAccountPaymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountPaymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
