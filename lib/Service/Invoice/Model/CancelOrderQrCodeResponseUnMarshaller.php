<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CancelOrderQrCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CancelOrderQrCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CancelOrderQrCodeResponseUnMarshaller();
    }

    /**
     * @return CancelOrderQrCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CancelOrderQrCodeResponse
     */
    protected function getResponseInstance()
    {
        return new CancelOrderQrCodeResponse();
    }
}

CancelOrderQrCodeResponseUnMarshaller::__init();
