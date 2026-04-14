<?php

namespace Yeepay\Yop\Sdk\Service\Agentpay\Model;


class IntentRegisterResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YPAgentPayIntentResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Agentpay\Model\YPAgentPayIntentResDTO';
    }

    /**
     * @param YPAgentPayIntentResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YPAgentPayIntentResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
