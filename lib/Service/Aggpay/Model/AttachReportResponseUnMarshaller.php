<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AttachReportResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AttachReportResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AttachReportResponseUnMarshaller();
    }

    /**
     * @return AttachReportResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AttachReportResponse
     */
    protected function getResponseInstance()
    {
        return new AttachReportResponse();
    }
}

AttachReportResponseUnMarshaller::__init();
