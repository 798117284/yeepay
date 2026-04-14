<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;


class BindCardAuthApplyConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindCardAuthApplyConfirmRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmRspDTO';
    }

    /**
     * @param BindCardAuthApplyConfirmRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardAuthApplyConfirmRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
