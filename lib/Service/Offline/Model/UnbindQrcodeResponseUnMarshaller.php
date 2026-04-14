<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnbindQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnbindQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnbindQrcodeResponseUnMarshaller();
    }

    /**
     * @return UnbindQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnbindQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new UnbindQrcodeResponse();
    }
}

UnbindQrcodeResponseUnMarshaller::__init();
