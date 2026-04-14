<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggReportUpdateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggReportUpdateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggReportUpdateV10ResponseUnMarshaller();
    }

    /**
     * @return AggReportUpdateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggReportUpdateV10Response
     */
    protected function getResponseInstance()
    {
        return new AggReportUpdateV10Response();
    }
}

AggReportUpdateV10ResponseUnMarshaller::__init();
