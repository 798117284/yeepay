<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class OrderQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryOrderResDTO';
    }

    /**
     * @param YopQueryOrderResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryOrderResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
