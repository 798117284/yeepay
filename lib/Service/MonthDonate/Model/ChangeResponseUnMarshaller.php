<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ChangeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ChangeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ChangeResponseUnMarshaller();
    }

    /**
     * @return ChangeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ChangeResponse
     */
    protected function getResponseInstance()
    {
        return new ChangeResponse();
    }
}

ChangeResponseUnMarshaller::__init();
