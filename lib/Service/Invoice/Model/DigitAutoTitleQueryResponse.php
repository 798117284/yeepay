<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitAutoTitleQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2AutoTitleRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2AutoTitleRespDto';
    }

    /**
     * @param RespDto2AutoTitleRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2AutoTitleRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
