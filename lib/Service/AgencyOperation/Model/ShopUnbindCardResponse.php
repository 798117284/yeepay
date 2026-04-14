<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class ShopUnbindCardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyUnBindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardResponseDTO';
    }

    /**
     * @param ApplyUnBindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyUnBindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
