<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitUnifiedLoginCheckResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitUnifiedLoginCheckResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitUnifiedLoginCheckResponseUnMarshaller();
    }

    /**
     * @return DigitUnifiedLoginCheckResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitUnifiedLoginCheckResponse
     */
    protected function getResponseInstance()
    {
        return new DigitUnifiedLoginCheckResponse();
    }
}

DigitUnifiedLoginCheckResponseUnMarshaller::__init();
