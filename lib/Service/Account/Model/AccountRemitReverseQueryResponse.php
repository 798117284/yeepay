<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountRemitReverseQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitOrderReverseQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryRespDTO';
    }

    /**
     * @param RemitOrderReverseQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitOrderReverseQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
