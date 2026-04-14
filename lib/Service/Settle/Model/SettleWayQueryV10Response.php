<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleWayQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SettleWayQueryYOPResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayQueryYOPResponseDto';
    }

    /**
     * @param SettleWayQueryYOPResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleWayQueryYOPResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
