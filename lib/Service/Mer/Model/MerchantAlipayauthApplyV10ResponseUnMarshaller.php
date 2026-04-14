<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantAlipayauthApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantAlipayauthApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAlipayauthApplyV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantAlipayauthApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantAlipayauthApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantAlipayauthApplyV10Response();
    }
}

MerchantAlipayauthApplyV10ResponseUnMarshaller::__init();
