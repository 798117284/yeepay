<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ProductFeeModifyV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ModifyProductFeeRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ModifyProductFeeRespDto';
    }

    /**
     * @param ModifyProductFeeRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ModifyProductFeeRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
