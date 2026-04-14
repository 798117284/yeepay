<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ConfigLimitQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ConfigLimitQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ConfigLimitQueryResponseUnMarshaller();
    }

    /**
     * @return ConfigLimitQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ConfigLimitQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ConfigLimitQueryResponse();
    }
}

ConfigLimitQueryResponseUnMarshaller::__init();
