<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenAccountRequest0ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenAccountRequest0ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenAccountRequest0ResponseUnMarshaller();
    }

    /**
     * @return OpenAccountRequest0ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenAccountRequest0Response
     */
    protected function getResponseInstance()
    {
        return new OpenAccountRequest0Response();
    }
}

OpenAccountRequest0ResponseUnMarshaller::__init();
