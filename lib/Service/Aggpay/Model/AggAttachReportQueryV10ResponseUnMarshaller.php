<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggAttachReportQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggAttachReportQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggAttachReportQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AggAttachReportQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggAttachReportQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AggAttachReportQueryV10Response();
    }
}

AggAttachReportQueryV10ResponseUnMarshaller::__init();
