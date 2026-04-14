<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class CardQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantBankCardQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryRespDto';
    }

    /**
     * @param MerchantBankCardQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantBankCardQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
