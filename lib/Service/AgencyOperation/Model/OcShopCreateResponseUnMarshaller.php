<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcShopCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcShopCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcShopCreateResponseUnMarshaller();
    }

    /**
     * @return OcShopCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcShopCreateResponse
     */
    protected function getResponseInstance()
    {
        return new OcShopCreateResponse();
    }
}

OcShopCreateResponseUnMarshaller::__init();
