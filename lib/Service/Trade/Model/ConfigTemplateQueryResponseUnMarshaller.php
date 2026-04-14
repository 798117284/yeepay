<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ConfigTemplateQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ConfigTemplateQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ConfigTemplateQueryResponseUnMarshaller();
    }

    /**
     * @return ConfigTemplateQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ConfigTemplateQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ConfigTemplateQueryResponse();
    }
}

ConfigTemplateQueryResponseUnMarshaller::__init();
