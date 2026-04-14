<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class CreateShopResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ShopCreateResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateResponseDTO';
    }

    /**
     * @param ShopCreateResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ShopCreateResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
