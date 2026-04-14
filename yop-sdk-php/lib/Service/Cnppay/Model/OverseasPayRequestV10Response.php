<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasPayRequestV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OverseasCardPayResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasCardPayResponseDTO';
    }

    /**
     * @param OverseasCardPayResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OverseasCardPayResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
