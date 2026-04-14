<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BalanceQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountInfoRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountInfoRespDTO';
    }

    /**
     * @param AccountInfoRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountInfoRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
