<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;


class QueryBindCardListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindCardInfoRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BindCardInfoRspDTO';
    }

    /**
     * @param BindCardInfoRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardInfoRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
