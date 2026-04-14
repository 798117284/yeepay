<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitEnterpriseRegisterResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitEnterpriseInfoRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoRespDto';
    }

    /**
     * @param RespDto2YopDigitEnterpriseInfoRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitEnterpriseInfoRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
