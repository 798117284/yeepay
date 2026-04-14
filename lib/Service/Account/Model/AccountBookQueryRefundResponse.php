<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookQueryRefundResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryAccountBookRefundRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryAccountBookRefundRespDTO';
    }

    /**
     * @param QueryAccountBookRefundRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryAccountBookRefundRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
