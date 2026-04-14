<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantRectificationResultQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantRectificationResultRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantRectificationResultRespDTO';
    }

    /**
     * @param MerchantRectificationResultRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantRectificationResultRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
