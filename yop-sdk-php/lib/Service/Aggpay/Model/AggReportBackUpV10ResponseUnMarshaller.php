<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggReportBackUpV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggReportBackUpV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggReportBackUpV10ResponseUnMarshaller();
    }

    /**
     * @return AggReportBackUpV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggReportBackUpV10Response
     */
    protected function getResponseInstance()
    {
        return new AggReportBackUpV10Response();
    }
}

AggReportBackUpV10ResponseUnMarshaller::__init();
