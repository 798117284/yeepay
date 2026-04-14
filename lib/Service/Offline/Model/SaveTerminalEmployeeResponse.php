<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class SaveTerminalEmployeeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SaveTerminalEmployeeRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\SaveTerminalEmployeeRespDTO';
    }

    /**
     * @param SaveTerminalEmployeeRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SaveTerminalEmployeeRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
