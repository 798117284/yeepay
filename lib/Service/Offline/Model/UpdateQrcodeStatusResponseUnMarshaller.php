<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateQrcodeStatusResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateQrcodeStatusResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateQrcodeStatusResponseUnMarshaller();
    }

    /**
     * @return UpdateQrcodeStatusResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateQrcodeStatusResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateQrcodeStatusResponse();
    }
}

UpdateQrcodeStatusResponseUnMarshaller::__init();
