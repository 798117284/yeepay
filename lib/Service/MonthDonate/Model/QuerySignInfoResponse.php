<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;


class QuerySignInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MonthDonateSignListDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MonthDonate\Model\MonthDonateSignListDTO';
    }

    /**
     * @param MonthDonateSignListDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MonthDonateSignListDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
