<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseAutoPaymentOrderHlzhResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var HLZHAutoPaymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentRespDto';
    }

    /**
     * @param HLZHAutoPaymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return HLZHAutoPaymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
