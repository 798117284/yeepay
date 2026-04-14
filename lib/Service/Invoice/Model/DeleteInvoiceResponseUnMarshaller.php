<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DeleteInvoiceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DeleteInvoiceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DeleteInvoiceResponseUnMarshaller();
    }

    /**
     * @return DeleteInvoiceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DeleteInvoiceResponse
     */
    protected function getResponseInstance()
    {
        return new DeleteInvoiceResponse();
    }
}

DeleteInvoiceResponseUnMarshaller::__init();
