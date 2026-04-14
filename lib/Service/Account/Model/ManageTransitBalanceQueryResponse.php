<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageTransitBalanceQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryTransitVirtualAccountBalanceRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceRespDTO';
    }

    /**
     * @param QueryTransitVirtualAccountBalanceRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryTransitVirtualAccountBalanceRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
