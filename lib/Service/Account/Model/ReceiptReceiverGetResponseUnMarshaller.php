<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptReceiverGetResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptReceiverGetResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptReceiverGetResponseUnMarshaller();
    }

    /**
     * @return ReceiptReceiverGetResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptReceiverGetResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiptReceiverGetResponse();
    }
}

ReceiptReceiverGetResponseUnMarshaller::__init();
