<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnbindQrCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnbindQrCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnbindQrCodeResponseUnMarshaller();
    }

    /**
     * @return UnbindQrCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnbindQrCodeResponse
     */
    protected function getResponseInstance()
    {
        return new UnbindQrCodeResponse();
    }
}

UnbindQrCodeResponseUnMarshaller::__init();
