<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class InstallmentPayRequestV11Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var InstallmentPayRequestV11InstallmentPayResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestV11InstallmentPayResponseDTOResult';
    }

    /**
     * @param InstallmentPayRequestV11InstallmentPayResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InstallmentPayRequestV11InstallmentPayResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
