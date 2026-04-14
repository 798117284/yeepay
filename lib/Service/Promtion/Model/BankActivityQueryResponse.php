<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class BankActivityQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopMerchantBankMarketingQueryResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopMerchantBankMarketingQueryResponse';
    }

    /**
     * @param YopMerchantBankMarketingQueryResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopMerchantBankMarketingQueryResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
