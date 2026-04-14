<?php

namespace Yeepay\Yop\Sdk\Service\Recharge\Model;


class BankAccountQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBankAccountRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Recharge\Model\QueryBankAccountRespDTO';
    }

    /**
     * @param QueryBankAccountRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBankAccountRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
