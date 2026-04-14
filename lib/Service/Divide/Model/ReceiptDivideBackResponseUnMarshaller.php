<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptDivideBackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptDivideBackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptDivideBackResponseUnMarshaller();
    }

    /**
     * @return ReceiptDivideBackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptDivideBackResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiptDivideBackResponse();
    }
}

ReceiptDivideBackResponseUnMarshaller::__init();
