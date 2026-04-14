<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RestV2MerBossRegisterQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BossMerchantNetInProgressQueryApiRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInProgressQueryApiRespDTO';
    }

    /**
     * @param BossMerchantNetInProgressQueryApiRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BossMerchantNetInProgressQueryApiRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
