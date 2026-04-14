<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ProductIncrementSettleOpenV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AddIncrementSettleProductRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\AddIncrementSettleProductRespDto';
    }

    /**
     * @param AddIncrementSettleProductRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AddIncrementSettleProductRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
