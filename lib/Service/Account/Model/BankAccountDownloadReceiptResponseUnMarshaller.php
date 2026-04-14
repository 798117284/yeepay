<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountDownloadReceiptResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountDownloadReceiptResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountDownloadReceiptResponseUnMarshaller();
    }

    /**
     * @return BankAccountDownloadReceiptResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountDownloadReceiptResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountDownloadReceiptResponse();
    }
}

BankAccountDownloadReceiptResponseUnMarshaller::__init();
