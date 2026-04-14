<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InvoicePdfReSendEmailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InvoicePdfReSendEmailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InvoicePdfReSendEmailResponseUnMarshaller();
    }

    /**
     * @return InvoicePdfReSendEmailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InvoicePdfReSendEmailResponse
     */
    protected function getResponseInstance()
    {
        return new InvoicePdfReSendEmailResponse();
    }
}

InvoicePdfReSendEmailResponseUnMarshaller::__init();
