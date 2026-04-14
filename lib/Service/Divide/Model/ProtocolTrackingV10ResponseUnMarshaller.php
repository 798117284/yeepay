<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProtocolTrackingV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProtocolTrackingV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProtocolTrackingV10ResponseUnMarshaller();
    }

    /**
     * @return ProtocolTrackingV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProtocolTrackingV10Response
     */
    protected function getResponseInstance()
    {
        return new ProtocolTrackingV10Response();
    }
}

ProtocolTrackingV10ResponseUnMarshaller::__init();
