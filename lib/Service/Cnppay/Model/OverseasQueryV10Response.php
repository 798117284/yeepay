<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OverseasCardPayResultResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasCardPayResultResponseDTO';
    }

    /**
     * @param OverseasCardPayResultResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OverseasCardPayResultResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
