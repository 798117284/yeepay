<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class ProtocolConfirmV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ProtocolBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\ProtocolBaseResult';
    }

    /**
     * @param ProtocolBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProtocolBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
