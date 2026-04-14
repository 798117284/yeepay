<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BackQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryDivideBackResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\YopQueryDivideBackResDTO';
    }

    /**
     * @param YopQueryDivideBackResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryDivideBackResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
