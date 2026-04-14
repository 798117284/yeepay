<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseAutoPaymentQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoPaymentQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AutoPaymentQueryRespDto';
    }

    /**
     * @param AutoPaymentQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoPaymentQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
