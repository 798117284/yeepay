<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseAccountPayOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountPaymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRespDto';
    }

    /**
     * @param AccountPaymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountPaymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
