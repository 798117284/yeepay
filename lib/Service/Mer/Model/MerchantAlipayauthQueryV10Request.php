<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantAlipayauthQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var 
     */
    private $body;

    /**
     * Gets body
     *
     * @return 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body
     *
     * @param  $body
     * @return MerchantAlipayauthQueryV10Request
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchant_alipayauth_query_v1_0';
    }


}
