<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReportUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReportUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReportUpdateResponseUnMarshaller();
    }

    /**
     * @return ReportUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReportUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new ReportUpdateResponse();
    }
}

ReportUpdateResponseUnMarshaller::__init();
