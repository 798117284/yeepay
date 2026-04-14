<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;


class QueryUserInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MonthDonateInfoListDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MonthDonate\Model\MonthDonateInfoListDTO';
    }

    /**
     * @param MonthDonateInfoListDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MonthDonateInfoListDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
