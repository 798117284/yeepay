<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseWithholdingCheckBalanceV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountPaymentBaseResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentBaseResponseDto';
    }

    /**
     * @param AccountPaymentBaseResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountPaymentBaseResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
