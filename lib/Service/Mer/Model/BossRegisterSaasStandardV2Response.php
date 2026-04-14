<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class BossRegisterSaasStandardV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BossMerchantNetInStandardApiRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInStandardApiRespDTO';
    }

    /**
     * @param BossMerchantNetInStandardApiRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BossMerchantNetInStandardApiRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
