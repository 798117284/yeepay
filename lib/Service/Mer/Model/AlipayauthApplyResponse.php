<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class AlipayauthApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var IdentityAuthApplymentRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentRespDto';
    }

    /**
     * @param IdentityAuthApplymentRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return IdentityAuthApplymentRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
