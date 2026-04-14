<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShopBindQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShopBindQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShopBindQueryResponseUnMarshaller();
    }

    /**
     * @return ShopBindQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShopBindQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ShopBindQueryResponse();
    }
}

ShopBindQueryResponseUnMarshaller::__init();
