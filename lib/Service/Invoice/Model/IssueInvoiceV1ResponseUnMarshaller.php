<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class IssueInvoiceV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var IssueInvoiceV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IssueInvoiceV1ResponseUnMarshaller();
    }

    /**
     * @return IssueInvoiceV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return IssueInvoiceV1Response
     */
    protected function getResponseInstance()
    {
        return new IssueInvoiceV1Response();
    }
}

IssueInvoiceV1ResponseUnMarshaller::__init();
