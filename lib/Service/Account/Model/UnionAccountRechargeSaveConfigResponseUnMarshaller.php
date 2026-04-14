<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountRechargeSaveConfigResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountRechargeSaveConfigResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountRechargeSaveConfigResponseUnMarshaller();
    }

    /**
     * @return UnionAccountRechargeSaveConfigResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountRechargeSaveConfigResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountRechargeSaveConfigResponse();
    }
}

UnionAccountRechargeSaveConfigResponseUnMarshaller::__init();
