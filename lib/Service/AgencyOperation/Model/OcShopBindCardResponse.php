<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class OcShopBindCardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyBindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardResponseDTO';
    }

    /**
     * @param ApplyBindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyBindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
