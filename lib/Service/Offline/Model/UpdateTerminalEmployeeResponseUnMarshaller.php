<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateTerminalEmployeeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateTerminalEmployeeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateTerminalEmployeeResponseUnMarshaller();
    }

    /**
     * @return UpdateTerminalEmployeeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateTerminalEmployeeResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateTerminalEmployeeResponse();
    }
}

UpdateTerminalEmployeeResponseUnMarshaller::__init();
