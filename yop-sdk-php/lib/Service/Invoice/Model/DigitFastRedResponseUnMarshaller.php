<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitFastRedResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitFastRedResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitFastRedResponseUnMarshaller();
    }

    /**
     * @return DigitFastRedResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitFastRedResponse
     */
    protected function getResponseInstance()
    {
        return new DigitFastRedResponse();
    }
}

DigitFastRedResponseUnMarshaller::__init();
