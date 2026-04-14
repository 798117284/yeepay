<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;


class QueryOrderInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MonthDonateOrderListDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MonthDonate\Model\MonthDonateOrderListDTO';
    }

    /**
     * @param MonthDonateOrderListDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MonthDonateOrderListDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
