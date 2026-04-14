<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BackReceiptDownloadV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BackReceiptDownloadV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackReceiptDownloadV10ResponseUnMarshaller();
    }

    /**
     * @return BackReceiptDownloadV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BackReceiptDownloadV10Response
     */
    protected function getResponseInstance()
    {
        return new BackReceiptDownloadV10Response();
    }
}

BackReceiptDownloadV10ResponseUnMarshaller::__init();
