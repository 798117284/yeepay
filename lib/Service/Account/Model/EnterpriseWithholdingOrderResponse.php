<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseWithholdingOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WithholdingPaymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithholdingPaymentRespDto';
    }

    /**
     * @param WithholdingPaymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithholdingPaymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
