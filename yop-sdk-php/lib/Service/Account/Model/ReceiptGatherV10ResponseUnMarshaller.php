<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptGatherV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptGatherV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptGatherV10ResponseUnMarshaller();
    }

    /**
     * @return ReceiptGatherV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptGatherV10Response
     */
    protected function getResponseInstance()
    {
        return new ReceiptGatherV10Response();
    }
}

ReceiptGatherV10ResponseUnMarshaller::__init();
