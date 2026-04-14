<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AutoWithdrawRuleQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopAutoWithdrawRuleQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleQueryResponseDTO';
    }

    /**
     * @param YopAutoWithdrawRuleQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopAutoWithdrawRuleQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
