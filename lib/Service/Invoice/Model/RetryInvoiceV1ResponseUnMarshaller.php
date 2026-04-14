<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RetryInvoiceV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RetryInvoiceV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RetryInvoiceV1ResponseUnMarshaller();
    }

    /**
     * @return RetryInvoiceV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RetryInvoiceV1Response
     */
    protected function getResponseInstance()
    {
        return new RetryInvoiceV1Response();
    }
}

RetryInvoiceV1ResponseUnMarshaller::__init();
