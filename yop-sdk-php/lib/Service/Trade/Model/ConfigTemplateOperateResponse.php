<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class ConfigTemplateOperateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopOperateTradeTemplateResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopOperateTradeTemplateResDTO';
    }

    /**
     * @param YopOperateTradeTemplateResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopOperateTradeTemplateResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
