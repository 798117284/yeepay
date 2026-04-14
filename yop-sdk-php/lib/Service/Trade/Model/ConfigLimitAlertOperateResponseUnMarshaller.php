<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ConfigLimitAlertOperateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ConfigLimitAlertOperateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ConfigLimitAlertOperateResponseUnMarshaller();
    }

    /**
     * @return ConfigLimitAlertOperateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ConfigLimitAlertOperateResponse
     */
    protected function getResponseInstance()
    {
        return new ConfigLimitAlertOperateResponse();
    }
}

ConfigLimitAlertOperateResponseUnMarshaller::__init();
