<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcShopBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcShopBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcShopBindCardResponseUnMarshaller();
    }

    /**
     * @return OcShopBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcShopBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new OcShopBindCardResponse();
    }
}

OcShopBindCardResponseUnMarshaller::__init();
