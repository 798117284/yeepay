<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigAddV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return WechatConfigAddV10Request
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'wechat_config_add_v1_0';
    }


}
