<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShopAuthorizeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShopAuthorizeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShopAuthorizeResponseUnMarshaller();
    }

    /**
     * @return ShopAuthorizeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShopAuthorizeResponse
     */
    protected function getResponseInstance()
    {
        return new ShopAuthorizeResponse();
    }
}

ShopAuthorizeResponseUnMarshaller::__init();
