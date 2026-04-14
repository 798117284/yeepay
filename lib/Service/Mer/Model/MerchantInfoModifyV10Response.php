<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantInfoModifyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantInfoModifyRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyRespDTO';
    }

    /**
     * @param MerchantInfoModifyRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantInfoModifyRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
