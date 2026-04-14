<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantWechatauthCancelResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplymentCancelRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentCancelRespDto';
    }

    /**
     * @param ApplymentCancelRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplymentCancelRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
