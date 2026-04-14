<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SaveTerminalEmployeeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SaveTerminalEmployeeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SaveTerminalEmployeeResponseUnMarshaller();
    }

    /**
     * @return SaveTerminalEmployeeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SaveTerminalEmployeeResponse
     */
    protected function getResponseInstance()
    {
        return new SaveTerminalEmployeeResponse();
    }
}

SaveTerminalEmployeeResponseUnMarshaller::__init();
