<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ConfigLimitOperateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ConfigLimitOperateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ConfigLimitOperateResponseUnMarshaller();
    }

    /**
     * @return ConfigLimitOperateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ConfigLimitOperateResponse
     */
    protected function getResponseInstance()
    {
        return new ConfigLimitOperateResponse();
    }
}

ConfigLimitOperateResponseUnMarshaller::__init();
