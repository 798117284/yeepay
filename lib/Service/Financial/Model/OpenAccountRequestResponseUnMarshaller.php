<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenAccountRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenAccountRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenAccountRequestResponseUnMarshaller();
    }

    /**
     * @return OpenAccountRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenAccountRequestResponse
     */
    protected function getResponseInstance()
    {
        return new OpenAccountRequestResponse();
    }
}

OpenAccountRequestResponseUnMarshaller::__init();
