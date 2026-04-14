<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantAlipayauthCancelV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BusinessManageBaseRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BusinessManageBaseRespDto';
    }

    /**
     * @param BusinessManageBaseRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BusinessManageBaseRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
