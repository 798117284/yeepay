<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitIssueInvoiceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitIssueInvoiceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitIssueInvoiceResponseUnMarshaller();
    }

    /**
     * @return DigitIssueInvoiceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitIssueInvoiceResponse
     */
    protected function getResponseInstance()
    {
        return new DigitIssueInvoiceResponse();
    }
}

DigitIssueInvoiceResponseUnMarshaller::__init();
