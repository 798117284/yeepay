<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ConfigTemplateOperateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ConfigTemplateOperateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ConfigTemplateOperateResponseUnMarshaller();
    }

    /**
     * @return ConfigTemplateOperateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ConfigTemplateOperateResponse
     */
    protected function getResponseInstance()
    {
        return new ConfigTemplateOperateResponse();
    }
}

ConfigTemplateOperateResponseUnMarshaller::__init();
