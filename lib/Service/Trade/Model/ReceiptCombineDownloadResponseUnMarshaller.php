<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptCombineDownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptCombineDownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptCombineDownloadResponseUnMarshaller();
    }

    /**
     * @return ReceiptCombineDownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptCombineDownloadResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiptCombineDownloadResponse();
    }
}

ReceiptCombineDownloadResponseUnMarshaller::__init();
