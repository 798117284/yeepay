<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillFlowSumResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryFundBillSumResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryFundBillSumResponseDTO';
    }

    /**
     * @param YopQueryFundBillSumResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryFundBillSumResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
