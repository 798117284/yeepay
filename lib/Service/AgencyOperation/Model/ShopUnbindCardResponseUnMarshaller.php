<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShopUnbindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShopUnbindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShopUnbindCardResponseUnMarshaller();
    }

    /**
     * @return ShopUnbindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShopUnbindCardResponse
     */
    protected function getResponseInstance()
    {
        return new ShopUnbindCardResponse();
    }
}

ShopUnbindCardResponseUnMarshaller::__init();
