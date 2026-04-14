<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AliSignContractQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SignContractApplyQueryRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryRspDTO';
    }

    /**
     * @param SignContractApplyQueryRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SignContractApplyQueryRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
