<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class OcShopQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryShopResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryShopResponseDTO';
    }

    /**
     * @param YopQueryShopResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryShopResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
