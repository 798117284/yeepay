<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProtocolConfirmV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProtocolConfirmV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProtocolConfirmV10ResponseUnMarshaller();
    }

    /**
     * @return ProtocolConfirmV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProtocolConfirmV10Response
     */
    protected function getResponseInstance()
    {
        return new ProtocolConfirmV10Response();
    }
}

ProtocolConfirmV10ResponseUnMarshaller::__init();
