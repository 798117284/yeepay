<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CloseResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CloseResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CloseResponseUnMarshaller();
    }

    /**
     * @return CloseResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CloseResponse
     */
    protected function getResponseInstance()
    {
        return new CloseResponse();
    }
}

CloseResponseUnMarshaller::__init();
