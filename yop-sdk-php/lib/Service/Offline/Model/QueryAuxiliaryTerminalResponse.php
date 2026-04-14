<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class QueryAuxiliaryTerminalResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryAuxiliaryTerminalRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\QueryAuxiliaryTerminalRespDTO';
    }

    /**
     * @param QueryAuxiliaryTerminalRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryAuxiliaryTerminalRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
