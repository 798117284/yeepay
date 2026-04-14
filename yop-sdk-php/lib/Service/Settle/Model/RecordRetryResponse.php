<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class RecordRetryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopSettleRecordRetryResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleRecordRetryResponseDto';
    }

    /**
     * @param YopSettleRecordRetryResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopSettleRecordRetryResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
