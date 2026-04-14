<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model\Old;


class ENTERPRISEAUTHResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EnterpriseAuthResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthResponseDTO';
    }

    /**
     * @param EnterpriseAuthResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAuthResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
