<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ReceiverUpdateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BaseRespDto';
    }

    /**
     * @param BaseRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
