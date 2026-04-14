<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class ConfigTemplateQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryTradeTemplateResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryTradeTemplateResDTO';
    }

    /**
     * @param YopQueryTradeTemplateResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryTradeTemplateResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
