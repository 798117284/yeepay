<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitOrderQrcodeStatusQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitOrderQrcodeStatusQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitOrderQrcodeStatusQueryResponseUnMarshaller();
    }

    /**
     * @return DigitOrderQrcodeStatusQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitOrderQrcodeStatusQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitOrderQrcodeStatusQueryResponse();
    }
}

DigitOrderQrcodeStatusQueryResponseUnMarshaller::__init();
