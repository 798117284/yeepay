<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class VoucherAssetApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopGenerationAssetVoucherRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\YopGenerationAssetVoucherRespDTO';
    }

    /**
     * @param YopGenerationAssetVoucherRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopGenerationAssetVoucherRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
