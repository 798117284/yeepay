<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class QuerySingleTransferDetailResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QuerySingleTransferDetailRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailRspDTO';
    }

    /**
     * @param QuerySingleTransferDetailRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QuerySingleTransferDetailRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
