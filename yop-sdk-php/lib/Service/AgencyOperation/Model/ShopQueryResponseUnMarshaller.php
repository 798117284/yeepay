<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShopQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShopQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShopQueryResponseUnMarshaller();
    }

    /**
     * @return ShopQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShopQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ShopQueryResponse();
    }
}

ShopQueryResponseUnMarshaller::__init();
