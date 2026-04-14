<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ReceiverApplyProgressQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyReceiverProgressQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyReceiverProgressQueryRespDto';
    }

    /**
     * @param ApplyReceiverProgressQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyReceiverProgressQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
