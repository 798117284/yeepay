<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnifiedOrderV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnifiedOrderV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnifiedOrderV20ResponseUnMarshaller();
    }

    /**
     * @return UnifiedOrderV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnifiedOrderV20Response
     */
    protected function getResponseInstance()
    {
        return new UnifiedOrderV20Response();
    }
}

UnifiedOrderV20ResponseUnMarshaller::__init();
