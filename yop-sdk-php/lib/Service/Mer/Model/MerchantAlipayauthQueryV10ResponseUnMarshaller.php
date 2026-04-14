<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantAlipayauthQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantAlipayauthQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAlipayauthQueryV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantAlipayauthQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantAlipayauthQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantAlipayauthQueryV10Response();
    }
}

MerchantAlipayauthQueryV10ResponseUnMarshaller::__init();
