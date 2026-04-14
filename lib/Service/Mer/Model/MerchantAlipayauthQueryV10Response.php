<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantAlipayauthQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryIdentityAuthResultRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\QueryIdentityAuthResultRespDto';
    }

    /**
     * @param QueryIdentityAuthResultRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryIdentityAuthResultRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
