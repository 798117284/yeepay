<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitInvoicePageQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitInvoicePageQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitInvoicePageQueryResponseUnMarshaller();
    }

    /**
     * @return DigitInvoicePageQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitInvoicePageQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitInvoicePageQueryResponse();
    }
}

DigitInvoicePageQueryResponseUnMarshaller::__init();
