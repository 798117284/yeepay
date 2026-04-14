<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnifiedOrderV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnifiedOrderV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnifiedOrderV2ResponseUnMarshaller();
    }

    /**
     * @return UnifiedOrderV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnifiedOrderV2Response
     */
    protected function getResponseInstance()
    {
        return new UnifiedOrderV2Response();
    }
}

UnifiedOrderV2ResponseUnMarshaller::__init();
