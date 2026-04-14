<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class TradeConfigLimitAlertOperateV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeLimitQueryResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitQueryResDTO';
    }

    /**
     * @param TradeLimitQueryResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeLimitQueryResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
