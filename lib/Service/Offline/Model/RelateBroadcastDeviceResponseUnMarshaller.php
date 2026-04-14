<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RelateBroadcastDeviceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RelateBroadcastDeviceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RelateBroadcastDeviceResponseUnMarshaller();
    }

    /**
     * @return RelateBroadcastDeviceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RelateBroadcastDeviceResponse
     */
    protected function getResponseInstance()
    {
        return new RelateBroadcastDeviceResponse();
    }
}

RelateBroadcastDeviceResponseUnMarshaller::__init();
