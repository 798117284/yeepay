<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class PromtionBankActivitySignupResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopBankMarketingSignUpResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopBankMarketingSignUpResponse';
    }

    /**
     * @param YopBankMarketingSignUpResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopBankMarketingSignUpResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
