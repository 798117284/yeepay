<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProtocolApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProtocolApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProtocolApplyV10ResponseUnMarshaller();
    }

    /**
     * @return ProtocolApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProtocolApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new ProtocolApplyV10Response();
    }
}

ProtocolApplyV10ResponseUnMarshaller::__init();
