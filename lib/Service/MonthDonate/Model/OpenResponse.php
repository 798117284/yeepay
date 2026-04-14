<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;


class OpenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenMonthDonateResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MonthDonate\Model\OpenMonthDonateResponseDTO';
    }

    /**
     * @param OpenMonthDonateResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenMonthDonateResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
