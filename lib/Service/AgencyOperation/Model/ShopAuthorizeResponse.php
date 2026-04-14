<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class ShopAuthorizeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountApplyResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyResponseDTO';
    }

    /**
     * @param AccountApplyResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountApplyResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
