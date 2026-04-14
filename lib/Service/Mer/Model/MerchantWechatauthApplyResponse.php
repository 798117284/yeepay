<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantWechatauthApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentRespDto';
    }

    /**
     * @param ApplymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
