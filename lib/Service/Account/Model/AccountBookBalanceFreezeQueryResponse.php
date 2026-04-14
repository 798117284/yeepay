<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookBalanceFreezeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookFreezeQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeQueryResponseDTO';
    }

    /**
     * @param AccountBookFreezeQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookFreezeQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
