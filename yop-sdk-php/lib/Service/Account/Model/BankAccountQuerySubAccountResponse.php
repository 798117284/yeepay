<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountQuerySubAccountResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryOpenSubBankAccountRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryOpenSubBankAccountRespDTO';
    }

    /**
     * @param QueryOpenSubBankAccountRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryOpenSubBankAccountRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
