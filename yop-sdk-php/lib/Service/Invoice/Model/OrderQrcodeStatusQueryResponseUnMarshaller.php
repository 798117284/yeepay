<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderQrcodeStatusQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderQrcodeStatusQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderQrcodeStatusQueryResponseUnMarshaller();
    }

    /**
     * @return OrderQrcodeStatusQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderQrcodeStatusQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OrderQrcodeStatusQueryResponse();
    }
}

OrderQrcodeStatusQueryResponseUnMarshaller::__init();
