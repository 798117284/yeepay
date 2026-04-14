<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawCardModifyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ModifyBindCardRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ModifyBindCardRespDTO';
    }

    /**
     * @param ModifyBindCardRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ModifyBindCardRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
