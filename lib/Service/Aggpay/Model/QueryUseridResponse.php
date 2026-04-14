<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class QueryUseridResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PassiveGetUserIdResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PassiveGetUserIdResponseDTO';
    }

    /**
     * @param PassiveGetUserIdResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PassiveGetUserIdResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
