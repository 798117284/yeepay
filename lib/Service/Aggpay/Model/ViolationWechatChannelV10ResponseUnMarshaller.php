<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ViolationWechatChannelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ViolationWechatChannelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ViolationWechatChannelV10ResponseUnMarshaller();
    }

    /**
     * @return ViolationWechatChannelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ViolationWechatChannelV10Response
     */
    protected function getResponseInstance()
    {
        return new ViolationWechatChannelV10Response();
    }
}

ViolationWechatChannelV10ResponseUnMarshaller::__init();
