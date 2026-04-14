<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseAutoPaymentOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoPaymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AutoPaymentRespDto';
    }

    /**
     * @param AutoPaymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoPaymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
