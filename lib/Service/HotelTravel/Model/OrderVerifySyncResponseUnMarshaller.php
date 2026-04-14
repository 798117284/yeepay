<?php

namespace Yeepay\Yop\Sdk\Service\HotelTravel\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderVerifySyncResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderVerifySyncResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderVerifySyncResponseUnMarshaller();
    }

    /**
     * @return OrderVerifySyncResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderVerifySyncResponse
     */
    protected function getResponseInstance()
    {
        return new OrderVerifySyncResponse();
    }
}

OrderVerifySyncResponseUnMarshaller::__init();
