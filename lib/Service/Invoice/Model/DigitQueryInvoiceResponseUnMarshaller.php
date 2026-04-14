<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitQueryInvoiceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitQueryInvoiceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitQueryInvoiceResponseUnMarshaller();
    }

    /**
     * @return DigitQueryInvoiceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitQueryInvoiceResponse
     */
    protected function getResponseInstance()
    {
        return new DigitQueryInvoiceResponse();
    }
}

DigitQueryInvoiceResponseUnMarshaller::__init();
