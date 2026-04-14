<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SelfSettleApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SelfSettleResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleResponseDto';
    }

    /**
     * @param SelfSettleResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SelfSettleResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
