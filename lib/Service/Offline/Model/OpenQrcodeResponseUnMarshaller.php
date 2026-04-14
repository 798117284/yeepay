<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenQrcodeResponseUnMarshaller();
    }

    /**
     * @return OpenQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new OpenQrcodeResponse();
    }
}

OpenQrcodeResponseUnMarshaller::__init();
