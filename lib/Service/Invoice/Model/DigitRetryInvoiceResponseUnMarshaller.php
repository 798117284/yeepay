<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitRetryInvoiceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitRetryInvoiceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitRetryInvoiceResponseUnMarshaller();
    }

    /**
     * @return DigitRetryInvoiceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitRetryInvoiceResponse
     */
    protected function getResponseInstance()
    {
        return new DigitRetryInvoiceResponse();
    }
}

DigitRetryInvoiceResponseUnMarshaller::__init();
