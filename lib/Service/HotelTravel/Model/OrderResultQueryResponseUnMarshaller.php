<?php

namespace Yeepay\Yop\Sdk\Service\HotelTravel\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderResultQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderResultQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderResultQueryResponseUnMarshaller();
    }

    /**
     * @return OrderResultQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderResultQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OrderResultQueryResponse();
    }
}

OrderResultQueryResponseUnMarshaller::__init();
