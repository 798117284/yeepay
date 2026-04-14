<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateQrCfgResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateQrCfgResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateQrCfgResponseUnMarshaller();
    }

    /**
     * @return UpdateQrCfgResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateQrCfgResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateQrCfgResponse();
    }
}

UpdateQrCfgResponseUnMarshaller::__init();
