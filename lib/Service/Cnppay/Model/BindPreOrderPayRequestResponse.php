<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class BindPreOrderPayRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\PayResponseDTO';
    }

    /**
     * @param PayResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
