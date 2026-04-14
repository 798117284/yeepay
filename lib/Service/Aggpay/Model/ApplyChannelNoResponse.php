<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ApplyChannelNoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyChannelNoResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ApplyChannelNoResponseDTO';
    }

    /**
     * @param ApplyChannelNoResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyChannelNoResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
