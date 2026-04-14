<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class QueryApplyChannelNoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryApplyChannelNoResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryApplyChannelNoResponseDTO';
    }

    /**
     * @param QueryApplyChannelNoResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryApplyChannelNoResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
