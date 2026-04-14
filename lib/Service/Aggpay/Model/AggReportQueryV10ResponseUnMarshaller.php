<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggReportQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggReportQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggReportQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AggReportQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggReportQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AggReportQueryV10Response();
    }
}

AggReportQueryV10ResponseUnMarshaller::__init();
