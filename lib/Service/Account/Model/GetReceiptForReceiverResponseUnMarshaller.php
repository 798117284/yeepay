<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetReceiptForReceiverResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetReceiptForReceiverResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetReceiptForReceiverResponseUnMarshaller();
    }

    /**
     * @return GetReceiptForReceiverResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetReceiptForReceiverResponse
     */
    protected function getResponseInstance()
    {
        return new GetReceiptForReceiverResponse();
    }
}

GetReceiptForReceiverResponseUnMarshaller::__init();
