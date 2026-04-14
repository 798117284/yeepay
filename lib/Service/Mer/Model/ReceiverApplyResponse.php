<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ReceiverApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyReceiverRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyReceiverRespDto';
    }

    /**
     * @param ApplyReceiverRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyReceiverRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
