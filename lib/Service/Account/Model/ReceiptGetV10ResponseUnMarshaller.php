<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptGetV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptGetV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptGetV10ResponseUnMarshaller();
    }

    /**
     * @return ReceiptGetV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptGetV10Response
     */
    protected function getResponseInstance()
    {
        return new ReceiptGetV10Response();
    }
}

ReceiptGetV10ResponseUnMarshaller::__init();
