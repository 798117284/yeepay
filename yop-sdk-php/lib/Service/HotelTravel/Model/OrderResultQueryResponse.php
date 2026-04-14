<?php

namespace Yeepay\Yop\Sdk\Service\HotelTravel\Model;


class OrderResultQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderCheckQueryResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderCheckQueryResponseDto';
    }

    /**
     * @param OrderCheckQueryResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderCheckQueryResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
