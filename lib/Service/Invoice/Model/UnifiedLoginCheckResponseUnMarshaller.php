<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnifiedLoginCheckResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnifiedLoginCheckResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnifiedLoginCheckResponseUnMarshaller();
    }

    /**
     * @return UnifiedLoginCheckResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnifiedLoginCheckResponse
     */
    protected function getResponseInstance()
    {
        return new UnifiedLoginCheckResponse();
    }
}

UnifiedLoginCheckResponseUnMarshaller::__init();
