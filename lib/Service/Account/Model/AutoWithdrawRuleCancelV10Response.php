<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AutoWithdrawRuleCancelV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopAutoWithdrawRuleCancelResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleCancelResponseDTO';
    }

    /**
     * @param YopAutoWithdrawRuleCancelResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopAutoWithdrawRuleCancelResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
