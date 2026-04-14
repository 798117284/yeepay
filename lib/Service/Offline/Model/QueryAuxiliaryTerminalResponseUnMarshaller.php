<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryAuxiliaryTerminalResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryAuxiliaryTerminalResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryAuxiliaryTerminalResponseUnMarshaller();
    }

    /**
     * @return QueryAuxiliaryTerminalResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryAuxiliaryTerminalResponse
     */
    protected function getResponseInstance()
    {
        return new QueryAuxiliaryTerminalResponse();
    }
}

QueryAuxiliaryTerminalResponseUnMarshaller::__init();
