<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class UnifiedLoginCheckResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto';
    }

    /**
     * @param RespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
