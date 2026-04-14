<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ActivityRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ActivityRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ActivityRequestResponseUnMarshaller();
    }

    /**
     * @return ActivityRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ActivityRequestResponse
     */
    protected function getResponseInstance()
    {
        return new ActivityRequestResponse();
    }
}

ActivityRequestResponseUnMarshaller::__init();
