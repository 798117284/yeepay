<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReportBackUpResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReportBackUpResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReportBackUpResponseUnMarshaller();
    }

    /**
     * @return ReportBackUpResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReportBackUpResponse
     */
    protected function getResponseInstance()
    {
        return new ReportBackUpResponse();
    }
}

ReportBackUpResponseUnMarshaller::__init();
