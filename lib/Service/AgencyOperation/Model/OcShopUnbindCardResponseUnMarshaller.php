<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcShopUnbindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcShopUnbindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcShopUnbindCardResponseUnMarshaller();
    }

    /**
     * @return OcShopUnbindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcShopUnbindCardResponse
     */
    protected function getResponseInstance()
    {
        return new OcShopUnbindCardResponse();
    }
}

OcShopUnbindCardResponseUnMarshaller::__init();
