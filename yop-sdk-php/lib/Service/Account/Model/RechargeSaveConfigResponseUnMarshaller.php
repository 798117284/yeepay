<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeSaveConfigResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeSaveConfigResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeSaveConfigResponseUnMarshaller();
    }

    /**
     * @return RechargeSaveConfigResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeSaveConfigResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeSaveConfigResponse();
    }
}

RechargeSaveConfigResponseUnMarshaller::__init();
