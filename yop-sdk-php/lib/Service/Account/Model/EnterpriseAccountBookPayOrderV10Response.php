<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseAccountBookPayOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookPaymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRespDto';
    }

    /**
     * @param AccountBookPaymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookPaymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
