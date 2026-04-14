<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitOrderQrcodeGenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitOrderQrcodeGenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitOrderQrcodeGenResponseUnMarshaller();
    }

    /**
     * @return DigitOrderQrcodeGenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitOrderQrcodeGenResponse
     */
    protected function getResponseInstance()
    {
        return new DigitOrderQrcodeGenResponse();
    }
}

DigitOrderQrcodeGenResponseUnMarshaller::__init();
