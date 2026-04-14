<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AutoWithdrawRuleSetResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopAutoWithdrawRuleSetResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleSetResponseDTO';
    }

    /**
     * @param YopAutoWithdrawRuleSetResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopAutoWithdrawRuleSetResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
