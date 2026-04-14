<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptDownloadV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptDownloadV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptDownloadV10ResponseUnMarshaller();
    }

    /**
     * @return ReceiptDownloadV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptDownloadV10Response
     */
    protected function getResponseInstance()
    {
        return new ReceiptDownloadV10Response();
    }
}

ReceiptDownloadV10ResponseUnMarshaller::__init();
