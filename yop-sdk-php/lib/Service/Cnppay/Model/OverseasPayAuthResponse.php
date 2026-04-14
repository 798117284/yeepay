<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasPayAuthResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OverseasPayAuthOverseasCardPayAuthResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayAuthOverseasCardPayAuthResponseDTOResult';
    }

    /**
     * @param OverseasPayAuthOverseasCardPayAuthResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OverseasPayAuthOverseasCardPayAuthResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
