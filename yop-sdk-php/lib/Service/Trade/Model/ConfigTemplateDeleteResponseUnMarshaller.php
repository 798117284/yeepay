<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ConfigTemplateDeleteResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ConfigTemplateDeleteResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ConfigTemplateDeleteResponseUnMarshaller();
    }

    /**
     * @return ConfigTemplateDeleteResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ConfigTemplateDeleteResponse
     */
    protected function getResponseInstance()
    {
        return new ConfigTemplateDeleteResponse();
    }
}

ConfigTemplateDeleteResponseUnMarshaller::__init();
