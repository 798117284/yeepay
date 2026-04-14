<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateQrCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateQrCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateQrCodeResponseUnMarshaller();
    }

    /**
     * @return CreateQrCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateQrCodeResponse
     */
    protected function getResponseInstance()
    {
        return new CreateQrCodeResponse();
    }
}

CreateQrCodeResponseUnMarshaller::__init();
