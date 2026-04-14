<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryInvoiceV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryInvoiceV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryInvoiceV1ResponseUnMarshaller();
    }

    /**
     * @return QueryInvoiceV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryInvoiceV1Response
     */
    protected function getResponseInstance()
    {
        return new QueryInvoiceV1Response();
    }
}

QueryInvoiceV1ResponseUnMarshaller::__init();
