<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderQrcodeGenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderQrcodeGenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderQrcodeGenResponseUnMarshaller();
    }

    /**
     * @return OrderQrcodeGenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderQrcodeGenResponse
     */
    protected function getResponseInstance()
    {
        return new OrderQrcodeGenResponse();
    }
}

OrderQrcodeGenResponseUnMarshaller::__init();
