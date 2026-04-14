<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class QueryAreaResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AreaRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\AreaRespDTO';
    }

    /**
     * @param AreaRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AreaRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
