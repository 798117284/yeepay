<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class WithholdShopBindV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseResultYopMerchantShopBindResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMerchantShopBindResDTO';
    }

    /**
     * @param BaseResultYopMerchantShopBindResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseResultYopMerchantShopBindResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
