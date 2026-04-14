<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitActiveSmsCodeCheckResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitActiveSmsCodeCheckResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitActiveSmsCodeCheckResponseUnMarshaller();
    }

    /**
     * @return DigitActiveSmsCodeCheckResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitActiveSmsCodeCheckResponse
     */
    protected function getResponseInstance()
    {
        return new DigitActiveSmsCodeCheckResponse();
    }
}

DigitActiveSmsCodeCheckResponseUnMarshaller::__init();
