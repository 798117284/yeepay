<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountRechargePayerAddResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopRechargeManageResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO';
    }

    /**
     * @param YopRechargeManageResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopRechargeManageResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
