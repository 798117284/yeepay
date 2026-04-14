<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetReceiptResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetReceiptResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetReceiptResponseUnMarshaller();
    }

    /**
     * @return GetReceiptResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetReceiptResponse
     */
    protected function getResponseInstance()
    {
        return new GetReceiptResponse();
    }
}

GetReceiptResponseUnMarshaller::__init();
