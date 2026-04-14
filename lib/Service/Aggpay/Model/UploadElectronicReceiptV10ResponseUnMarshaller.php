<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UploadElectronicReceiptV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UploadElectronicReceiptV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UploadElectronicReceiptV10ResponseUnMarshaller();
    }

    /**
     * @return UploadElectronicReceiptV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UploadElectronicReceiptV10Response
     */
    protected function getResponseInstance()
    {
        return new UploadElectronicReceiptV10Response();
    }
}

UploadElectronicReceiptV10ResponseUnMarshaller::__init();
