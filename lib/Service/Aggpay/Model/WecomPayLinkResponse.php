<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WecomPayLinkResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WeComResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WeComResponseDTO';
    }

    /**
     * @param WeComResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WeComResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
