<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawCardBindResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindCardRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BindCardRespDTO';
    }

    /**
     * @param BindCardRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
