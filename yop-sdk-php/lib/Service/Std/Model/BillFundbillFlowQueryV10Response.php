<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillFlowQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryFundBillFlowResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryFundBillFlowResponseDTO';
    }

    /**
     * @param YopQueryFundBillFlowResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryFundBillFlowResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
