<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitDeleteInvoiceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitDeleteInvoiceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitDeleteInvoiceResponseUnMarshaller();
    }

    /**
     * @return DigitDeleteInvoiceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitDeleteInvoiceResponse
     */
    protected function getResponseInstance()
    {
        return new DigitDeleteInvoiceResponse();
    }
}

DigitDeleteInvoiceResponseUnMarshaller::__init();
