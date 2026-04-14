<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class CloneMerchantResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CloneMerchantNetInRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\CloneMerchantNetInRespDto';
    }

    /**
     * @param CloneMerchantNetInRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CloneMerchantNetInRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
