<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class GetLoginResultResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalGetLoginResultRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetLoginResultRespDto';
    }

    /**
     * @param RespDto2YopDigitalGetLoginResultRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalGetLoginResultRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
