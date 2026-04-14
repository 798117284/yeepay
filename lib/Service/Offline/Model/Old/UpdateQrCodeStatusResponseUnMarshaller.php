<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateQrCodeStatusResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateQrCodeStatusResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateQrCodeStatusResponseUnMarshaller();
    }

    /**
     * @return UpdateQrCodeStatusResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateQrCodeStatusResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateQrCodeStatusResponse();
    }
}

UpdateQrCodeStatusResponseUnMarshaller::__init();
