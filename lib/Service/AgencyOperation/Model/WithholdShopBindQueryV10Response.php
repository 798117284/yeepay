<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class WithholdShopBindQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseResultYopQueryMerchantShopBindResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopQueryMerchantShopBindResDTO';
    }

    /**
     * @param BaseResultYopQueryMerchantShopBindResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseResultYopQueryMerchantShopBindResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
