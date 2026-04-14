<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProtocolTrackingResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProtocolTrackingResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProtocolTrackingResponseUnMarshaller();
    }

    /**
     * @return ProtocolTrackingResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProtocolTrackingResponse
     */
    protected function getResponseInstance()
    {
        return new ProtocolTrackingResponse();
    }
}

ProtocolTrackingResponseUnMarshaller::__init();
