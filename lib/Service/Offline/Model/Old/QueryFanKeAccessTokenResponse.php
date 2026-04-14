<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class QueryFanKeAccessTokenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryFanKeTokenRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryFanKeTokenRspDTO';
    }

    /**
     * @param YopQueryFanKeTokenRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryFanKeTokenRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
