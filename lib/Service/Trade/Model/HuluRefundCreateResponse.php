<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class HuluRefundCreateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopCreateHuluRefundResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundResDTO';
    }

    /**
     * @param YopCreateHuluRefundResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopCreateHuluRefundResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
