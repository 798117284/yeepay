<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReportAttachResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReportAttachResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReportAttachResponseUnMarshaller();
    }

    /**
     * @return ReportAttachResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReportAttachResponse
     */
    protected function getResponseInstance()
    {
        return new ReportAttachResponse();
    }
}

ReportAttachResponseUnMarshaller::__init();
