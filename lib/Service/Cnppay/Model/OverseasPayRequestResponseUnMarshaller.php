<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OverseasPayRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OverseasPayRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasPayRequestResponseUnMarshaller();
    }

    /**
     * @return OverseasPayRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OverseasPayRequestResponse
     */
    protected function getResponseInstance()
    {
        return new OverseasPayRequestResponse();
    }
}

OverseasPayRequestResponseUnMarshaller::__init();
