<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class OrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopCreateOrderV2ResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateOrderV2ResDTO';
    }

    /**
     * @param YopCreateOrderV2ResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopCreateOrderV2ResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
