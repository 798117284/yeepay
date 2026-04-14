<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenQrCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenQrCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenQrCodeResponseUnMarshaller();
    }

    /**
     * @return OpenQrCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenQrCodeResponse
     */
    protected function getResponseInstance()
    {
        return new OpenQrCodeResponse();
    }
}

OpenQrCodeResponseUnMarshaller::__init();
