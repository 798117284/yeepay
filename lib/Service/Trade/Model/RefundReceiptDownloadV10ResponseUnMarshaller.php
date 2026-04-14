<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundReceiptDownloadV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundReceiptDownloadV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundReceiptDownloadV10ResponseUnMarshaller();
    }

    /**
     * @return RefundReceiptDownloadV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundReceiptDownloadV10Response
     */
    protected function getResponseInstance()
    {
        return new RefundReceiptDownloadV10Response();
    }
}

RefundReceiptDownloadV10ResponseUnMarshaller::__init();
