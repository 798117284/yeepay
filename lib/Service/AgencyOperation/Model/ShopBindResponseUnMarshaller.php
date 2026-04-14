<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShopBindResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShopBindResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShopBindResponseUnMarshaller();
    }

    /**
     * @return ShopBindResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShopBindResponse
     */
    protected function getResponseInstance()
    {
        return new ShopBindResponse();
    }
}

ShopBindResponseUnMarshaller::__init();
