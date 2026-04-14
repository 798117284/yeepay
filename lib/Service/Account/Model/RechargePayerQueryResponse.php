<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargePayerQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopRechargeManageQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageQueryResponseDTO';
    }

    /**
     * @param YopRechargeManageQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopRechargeManageQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
