<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageAccountQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBalanceQueryResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBalanceQueryResponseDto';
    }

    /**
     * @param AccountBalanceQueryResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBalanceQueryResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
