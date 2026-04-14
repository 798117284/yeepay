<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OverseasPayAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OverseasPayAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasPayAuthResponseUnMarshaller();
    }

    /**
     * @return OverseasPayAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OverseasPayAuthResponse
     */
    protected function getResponseInstance()
    {
        return new OverseasPayAuthResponse();
    }
}

OverseasPayAuthResponseUnMarshaller::__init();
