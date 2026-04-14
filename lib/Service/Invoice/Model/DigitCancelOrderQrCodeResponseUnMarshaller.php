<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitCancelOrderQrCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitCancelOrderQrCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitCancelOrderQrCodeResponseUnMarshaller();
    }

    /**
     * @return DigitCancelOrderQrCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitCancelOrderQrCodeResponse
     */
    protected function getResponseInstance()
    {
        return new DigitCancelOrderQrCodeResponse();
    }
}

DigitCancelOrderQrCodeResponseUnMarshaller::__init();
