<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class GetClearAccountInfoByMerchantResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountQueryInfoRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryInfoRspDTO';
    }

    /**
     * @param BankAccountQueryInfoRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountQueryInfoRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
