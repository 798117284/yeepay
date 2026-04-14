<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitInvoicepdfResendemailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitInvoicepdfResendemailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitInvoicepdfResendemailResponseUnMarshaller();
    }

    /**
     * @return DigitInvoicepdfResendemailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitInvoicepdfResendemailResponse
     */
    protected function getResponseInstance()
    {
        return new DigitInvoicepdfResendemailResponse();
    }
}

DigitInvoicepdfResendemailResponseUnMarshaller::__init();
