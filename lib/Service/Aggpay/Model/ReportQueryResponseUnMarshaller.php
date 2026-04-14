<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReportQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReportQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReportQueryResponseUnMarshaller();
    }

    /**
     * @return ReportQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReportQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ReportQueryResponse();
    }
}

ReportQueryResponseUnMarshaller::__init();
