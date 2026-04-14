<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class GetUserIdResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UnionPayUserAuthResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\UnionPayUserAuthResponseDTO';
    }

    /**
     * @param UnionPayUserAuthResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UnionPayUserAuthResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
