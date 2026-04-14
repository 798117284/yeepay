<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class AgentrefundV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ResponseRefundDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseRefundDTO';
    }

    /**
     * @param ResponseRefundDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ResponseRefundDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
