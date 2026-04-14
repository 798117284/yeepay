<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantDisposeUnfreezeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantDisposeRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeRespDto';
    }

    /**
     * @param MerchantDisposeRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantDisposeRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
