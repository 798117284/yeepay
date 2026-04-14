<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateAuxiliaryTerminalResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpdateAuxiliaryTerminalRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\UpdateAuxiliaryTerminalRespDTO';
    }

    /**
     * @param UpdateAuxiliaryTerminalRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpdateAuxiliaryTerminalRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
