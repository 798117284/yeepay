<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShopBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShopBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShopBindCardResponseUnMarshaller();
    }

    /**
     * @return ShopBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShopBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new ShopBindCardResponse();
    }
}

ShopBindCardResponseUnMarshaller::__init();
