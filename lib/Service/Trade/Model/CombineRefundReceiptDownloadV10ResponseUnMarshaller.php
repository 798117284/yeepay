<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CombineRefundReceiptDownloadV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CombineRefundReceiptDownloadV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CombineRefundReceiptDownloadV10ResponseUnMarshaller();
    }

    /**
     * @return CombineRefundReceiptDownloadV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CombineRefundReceiptDownloadV10Response
     */
    protected function getResponseInstance()
    {
        return new CombineRefundReceiptDownloadV10Response();
    }
}

CombineRefundReceiptDownloadV10ResponseUnMarshaller::__init();
