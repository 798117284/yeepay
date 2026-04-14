<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitUserLoginResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitUserLoginResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitUserLoginResponseUnMarshaller();
    }

    /**
     * @return DigitUserLoginResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitUserLoginResponse
     */
    protected function getResponseInstance()
    {
        return new DigitUserLoginResponse();
    }
}

DigitUserLoginResponseUnMarshaller::__init();
