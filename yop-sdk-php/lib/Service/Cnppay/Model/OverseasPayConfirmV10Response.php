<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasPayConfirmV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayResultResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\PayResultResponseDTO';
    }

    /**
     * @param PayResultResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayResultResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
