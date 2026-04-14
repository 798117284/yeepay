<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantWechatauthApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantWechatauthApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantWechatauthApplyV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantWechatauthApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantWechatauthApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantWechatauthApplyV10Response();
    }
}

MerchantWechatauthApplyV10ResponseUnMarshaller::__init();
