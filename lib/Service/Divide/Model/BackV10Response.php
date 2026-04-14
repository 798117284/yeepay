<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BackV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopDivideBackResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\YopDivideBackResDTO';
    }

    /**
     * @param YopDivideBackResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopDivideBackResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
