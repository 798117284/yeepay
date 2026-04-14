<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class ConfigLimitOperateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeLimitOperateResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitOperateResDTO';
    }

    /**
     * @param TradeLimitOperateResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeLimitOperateResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
