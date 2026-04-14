<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantAdapterReadH5QueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryNetInProgressRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressRespDto';
    }

    /**
     * @param QueryNetInProgressRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryNetInProgressRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
