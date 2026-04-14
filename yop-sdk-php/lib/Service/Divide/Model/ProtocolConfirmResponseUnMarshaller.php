<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProtocolConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProtocolConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProtocolConfirmResponseUnMarshaller();
    }

    /**
     * @return ProtocolConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProtocolConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new ProtocolConfirmResponse();
    }
}

ProtocolConfirmResponseUnMarshaller::__init();
