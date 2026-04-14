<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class QueryMerchantStatusResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantExternalStatusQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantExternalStatusQueryRespDTO';
    }

    /**
     * @param MerchantExternalStatusQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantExternalStatusQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
