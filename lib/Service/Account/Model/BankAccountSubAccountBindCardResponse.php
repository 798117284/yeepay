<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountSubAccountBindCardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SubBankAccountBindCardRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardRespDTO';
    }

    /**
     * @param SubBankAccountBindCardRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubBankAccountBindCardRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
