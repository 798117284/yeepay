<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UploadElectronicReceiptResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UploadElectronicReceiptResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UploadElectronicReceiptResponseUnMarshaller();
    }

    /**
     * @return UploadElectronicReceiptResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UploadElectronicReceiptResponse
     */
    protected function getResponseInstance()
    {
        return new UploadElectronicReceiptResponse();
    }
}

UploadElectronicReceiptResponseUnMarshaller::__init();
