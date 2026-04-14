<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliCaptialTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliCaptialTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliCaptialTransferResponseUnMarshaller();
    }

    /**
     * @return AliCaptialTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliCaptialTransferResponse
     */
    protected function getResponseInstance()
    {
        return new AliCaptialTransferResponse();
    }
}

AliCaptialTransferResponseUnMarshaller::__init();
