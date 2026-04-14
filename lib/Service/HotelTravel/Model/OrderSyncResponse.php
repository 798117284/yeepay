<?php

namespace Yeepay\Yop\Sdk\Service\HotelTravel\Model;


class OrderSyncResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderInfoCheckResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderInfoCheckResponseDto';
    }

    /**
     * @param OrderInfoCheckResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderInfoCheckResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
