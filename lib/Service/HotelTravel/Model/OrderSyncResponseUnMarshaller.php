<?php

namespace Yeepay\Yop\Sdk\Service\HotelTravel\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderSyncResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderSyncResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderSyncResponseUnMarshaller();
    }

    /**
     * @return OrderSyncResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderSyncResponse
     */
    protected function getResponseInstance()
    {
        return new OrderSyncResponse();
    }
}

OrderSyncResponseUnMarshaller::__init();
