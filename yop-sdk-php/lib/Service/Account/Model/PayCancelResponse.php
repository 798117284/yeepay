<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayCancelResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitCancelRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitCancelRespDTO';
    }

    /**
     * @param RemitCancelRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitCancelRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
