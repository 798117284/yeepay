<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitActiveSmsCodeCheckResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopInvoiceUploadSmsVerifyCodeRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceUploadSmsVerifyCodeRespDto';
    }

    /**
     * @param RespDto2YopInvoiceUploadSmsVerifyCodeRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopInvoiceUploadSmsVerifyCodeRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
