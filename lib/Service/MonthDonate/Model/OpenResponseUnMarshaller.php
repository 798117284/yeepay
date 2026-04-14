<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenResponseUnMarshaller();
    }

    /**
     * @return OpenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenResponse
     */
    protected function getResponseInstance()
    {
        return new OpenResponse();
    }
}

OpenResponseUnMarshaller::__init();
