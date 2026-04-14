<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateAuxiliaryTerminalResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateAuxiliaryTerminalResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateAuxiliaryTerminalResponseUnMarshaller();
    }

    /**
     * @return CreateAuxiliaryTerminalResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateAuxiliaryTerminalResponse
     */
    protected function getResponseInstance()
    {
        return new CreateAuxiliaryTerminalResponse();
    }
}

CreateAuxiliaryTerminalResponseUnMarshaller::__init();
