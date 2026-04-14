<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class AutoGoodsCodeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2AutoGoodsCodeYopRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2AutoGoodsCodeYopRespDto';
    }

    /**
     * @param RespDto2AutoGoodsCodeYopRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2AutoGoodsCodeYopRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
