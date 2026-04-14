<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class OrderCloseResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ResponseOrderCloseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseOrderCloseDTO';
    }

    /**
     * @param ResponseOrderCloseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ResponseOrderCloseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
