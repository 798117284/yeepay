<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class EnterpriseUpdateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitEnterpriseInfoUpdateRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoUpdateRespDto';
    }

    /**
     * @param RespDto2YopDigitEnterpriseInfoUpdateRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitEnterpriseInfoUpdateRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
