<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantAlipayauthCancelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantAlipayauthCancelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAlipayauthCancelV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantAlipayauthCancelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantAlipayauthCancelV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantAlipayauthCancelV10Response();
    }
}

MerchantAlipayauthCancelV10ResponseUnMarshaller::__init();
