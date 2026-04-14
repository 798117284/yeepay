<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class RecordsPageV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SettleRecordPageQueryResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordPageQueryResponseDto';
    }

    /**
     * @param SettleRecordPageQueryResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleRecordPageQueryResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
