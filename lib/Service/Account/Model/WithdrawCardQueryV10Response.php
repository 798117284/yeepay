<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawCardQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindCardQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BindCardQueryRespDTO';
    }

    /**
     * @param BindCardQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
