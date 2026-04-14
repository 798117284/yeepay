<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AlipaySingleProxyTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AlipaySingleProxyTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AlipaySingleProxyTransferResponseUnMarshaller();
    }

    /**
     * @return AlipaySingleProxyTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AlipaySingleProxyTransferResponse
     */
    protected function getResponseInstance()
    {
        return new AlipaySingleProxyTransferResponse();
    }
}

AlipaySingleProxyTransferResponseUnMarshaller::__init();
