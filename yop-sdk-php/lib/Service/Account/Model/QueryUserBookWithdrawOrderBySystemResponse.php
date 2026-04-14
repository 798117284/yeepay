<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class QueryUserBookWithdrawOrderBySystemResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UserBookWithdrawQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawQueryRespDTO';
    }

    /**
     * @param UserBookWithdrawQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UserBookWithdrawQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
