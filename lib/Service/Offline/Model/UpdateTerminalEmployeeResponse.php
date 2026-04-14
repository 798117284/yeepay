<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateTerminalEmployeeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpdateTerminalEmployeeRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\UpdateTerminalEmployeeRespDTO';
    }

    /**
     * @param UpdateTerminalEmployeeRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpdateTerminalEmployeeRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
