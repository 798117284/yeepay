<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantWechatauthCancelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantWechatauthCancelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantWechatauthCancelV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantWechatauthCancelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantWechatauthCancelV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantWechatauthCancelV10Response();
    }
}

MerchantWechatauthCancelV10ResponseUnMarshaller::__init();
