<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class ConfigTemplateDeleteResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopDeleteTradeTemplateResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopDeleteTradeTemplateResDTO';
    }

    /**
     * @param YopDeleteTradeTemplateResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopDeleteTradeTemplateResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
