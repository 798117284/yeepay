<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitOpenServerResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitOpenServerResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitOpenServerResponseUnMarshaller();
    }

    /**
     * @return DigitOpenServerResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitOpenServerResponse
     */
    protected function getResponseInstance()
    {
        return new DigitOpenServerResponse();
    }
}

DigitOpenServerResponseUnMarshaller::__init();
