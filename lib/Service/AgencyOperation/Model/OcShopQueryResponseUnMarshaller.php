<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcShopQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcShopQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcShopQueryResponseUnMarshaller();
    }

    /**
     * @return OcShopQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcShopQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OcShopQueryResponse();
    }
}

OcShopQueryResponseUnMarshaller::__init();
