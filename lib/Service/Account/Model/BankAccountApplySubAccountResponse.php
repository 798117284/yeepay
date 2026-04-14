<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountApplySubAccountResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenSubBankAccountRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountRespDTO';
    }

    /**
     * @param OpenSubBankAccountRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenSubBankAccountRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
