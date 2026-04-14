<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class InitiateUserBookWithdrawResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var InitUserBookWithdrawRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawRespDTO';
    }

    /**
     * @param InitUserBookWithdrawRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InitUserBookWithdrawRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
