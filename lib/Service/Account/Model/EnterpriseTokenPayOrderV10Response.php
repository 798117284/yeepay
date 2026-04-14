<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseTokenPayOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TokenPaymentResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TokenPaymentResponseDto';
    }

    /**
     * @param TokenPaymentResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TokenPaymentResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
