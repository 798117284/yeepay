<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class EnterpriseQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitEnterpriseInfoQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoQueryRespDto';
    }

    /**
     * @param RespDto2YopDigitEnterpriseInfoQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitEnterpriseInfoQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
