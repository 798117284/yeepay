<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountAliSignContractResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SignContractRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SignContractRspDTO';
    }

    /**
     * @param SignContractRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SignContractRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
