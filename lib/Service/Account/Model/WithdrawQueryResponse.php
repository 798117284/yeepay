<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MGWithdrawOrderQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\MGWithdrawOrderQueryRespDTO';
    }

    /**
     * @param MGWithdrawOrderQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MGWithdrawOrderQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
