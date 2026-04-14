<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitUnifiedLoginResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitUnifiedLoginResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitUnifiedLoginResponseUnMarshaller();
    }

    /**
     * @return DigitUnifiedLoginResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitUnifiedLoginResponse
     */
    protected function getResponseInstance()
    {
        return new DigitUnifiedLoginResponse();
    }
}

DigitUnifiedLoginResponseUnMarshaller::__init();
