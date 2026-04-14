<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantBasicInfoQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantBasicInfoQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryRespDto';
    }

    /**
     * @param MerchantBasicInfoQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantBasicInfoQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
