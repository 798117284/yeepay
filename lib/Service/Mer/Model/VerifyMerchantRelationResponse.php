<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class VerifyMerchantRelationResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SubMerchantRelationRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\SubMerchantRelationRespDto';
    }

    /**
     * @param SubMerchantRelationRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubMerchantRelationRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
