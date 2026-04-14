<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class FastRedResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalFastRedRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalFastRedRespDto';
    }

    /**
     * @param RespDto2YopDigitalFastRedRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalFastRedRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
