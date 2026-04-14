<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReportQueryAllResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReportQueryAllResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReportQueryAllResponseUnMarshaller();
    }

    /**
     * @return ReportQueryAllResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReportQueryAllResponse
     */
    protected function getResponseInstance()
    {
        return new ReportQueryAllResponse();
    }
}

ReportQueryAllResponseUnMarshaller::__init();
