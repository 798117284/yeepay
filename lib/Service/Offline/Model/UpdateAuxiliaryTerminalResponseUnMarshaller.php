<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateAuxiliaryTerminalResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateAuxiliaryTerminalResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateAuxiliaryTerminalResponseUnMarshaller();
    }

    /**
     * @return UpdateAuxiliaryTerminalResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateAuxiliaryTerminalResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateAuxiliaryTerminalResponse();
    }
}

UpdateAuxiliaryTerminalResponseUnMarshaller::__init();
