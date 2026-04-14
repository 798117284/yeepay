<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DownloadDepositNotifyReceiptResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DownloadDepositNotifyReceiptResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DownloadDepositNotifyReceiptResponseUnMarshaller();
    }

    /**
     * @return DownloadDepositNotifyReceiptResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DownloadDepositNotifyReceiptResponse
     */
    protected function getResponseInstance()
    {
        return new DownloadDepositNotifyReceiptResponse();
    }
}

DownloadDepositNotifyReceiptResponseUnMarshaller::__init();
