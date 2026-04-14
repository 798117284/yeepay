<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProtocolQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProtocolQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProtocolQueryResponseUnMarshaller();
    }

    /**
     * @return ProtocolQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProtocolQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ProtocolQueryResponse();
    }
}

ProtocolQueryResponseUnMarshaller::__init();
