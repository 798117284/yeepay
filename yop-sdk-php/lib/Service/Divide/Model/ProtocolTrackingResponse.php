<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class ProtocolTrackingResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SignTrackingBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\SignTrackingBaseResult';
    }

    /**
     * @param SignTrackingBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SignTrackingBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
