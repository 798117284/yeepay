<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProtocolQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProtocolQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProtocolQueryV10ResponseUnMarshaller();
    }

    /**
     * @return ProtocolQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProtocolQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new ProtocolQueryV10Response();
    }
}

ProtocolQueryV10ResponseUnMarshaller::__init();
