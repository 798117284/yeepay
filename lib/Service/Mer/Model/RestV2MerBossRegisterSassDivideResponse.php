<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RestV2MerBossRegisterSassDivideResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BossMerchantNetInDivideApiRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInDivideApiRespDTO';
    }

    /**
     * @param BossMerchantNetInDivideApiRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BossMerchantNetInDivideApiRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
