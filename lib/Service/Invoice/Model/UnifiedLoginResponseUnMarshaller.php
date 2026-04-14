<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnifiedLoginResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnifiedLoginResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnifiedLoginResponseUnMarshaller();
    }

    /**
     * @return UnifiedLoginResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnifiedLoginResponse
     */
    protected function getResponseInstance()
    {
        return new UnifiedLoginResponse();
    }
}

UnifiedLoginResponseUnMarshaller::__init();
