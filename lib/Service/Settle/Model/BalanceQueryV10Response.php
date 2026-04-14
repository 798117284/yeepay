<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class BalanceQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SelfSettleQueryResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleQueryResponseDto';
    }

    /**
     * @param SelfSettleQueryResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SelfSettleQueryResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
