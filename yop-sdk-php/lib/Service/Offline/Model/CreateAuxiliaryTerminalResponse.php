<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class CreateAuxiliaryTerminalResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CreateAuxiliaryTerminalRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\CreateAuxiliaryTerminalRespDTO';
    }

    /**
     * @param CreateAuxiliaryTerminalRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CreateAuxiliaryTerminalRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
