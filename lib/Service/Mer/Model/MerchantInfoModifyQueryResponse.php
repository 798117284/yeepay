<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantInfoModifyQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryMerchantInfoModifyProgressRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantInfoModifyProgressRespDTO';
    }

    /**
     * @param QueryMerchantInfoModifyProgressRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryMerchantInfoModifyProgressRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
