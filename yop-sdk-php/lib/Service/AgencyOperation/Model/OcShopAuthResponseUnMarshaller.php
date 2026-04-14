<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcShopAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcShopAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcShopAuthResponseUnMarshaller();
    }

    /**
     * @return OcShopAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcShopAuthResponse
     */
    protected function getResponseInstance()
    {
        return new OcShopAuthResponse();
    }
}

OcShopAuthResponseUnMarshaller::__init();
