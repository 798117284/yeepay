<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ActiveSmsCodeCheckResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ActiveSmsCodeCheckResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ActiveSmsCodeCheckResponseUnMarshaller();
    }

    /**
     * @return ActiveSmsCodeCheckResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ActiveSmsCodeCheckResponse
     */
    protected function getResponseInstance()
    {
        return new ActiveSmsCodeCheckResponse();
    }
}

ActiveSmsCodeCheckResponseUnMarshaller::__init();
