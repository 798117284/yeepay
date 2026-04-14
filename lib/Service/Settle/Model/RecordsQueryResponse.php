<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class RecordsQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SettleRecordQueryResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordQueryResponseDto';
    }

    /**
     * @param SettleRecordQueryResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleRecordQueryResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
