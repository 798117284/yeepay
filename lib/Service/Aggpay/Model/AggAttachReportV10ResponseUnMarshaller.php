<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggAttachReportV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggAttachReportV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggAttachReportV10ResponseUnMarshaller();
    }

    /**
     * @return AggAttachReportV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggAttachReportV10Response
     */
    protected function getResponseInstance()
    {
        return new AggAttachReportV10Response();
    }
}

AggAttachReportV10ResponseUnMarshaller::__init();
