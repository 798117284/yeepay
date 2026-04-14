<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SingleProxyTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SingleProxyTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SingleProxyTransferResponseUnMarshaller();
    }

    /**
     * @return SingleProxyTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SingleProxyTransferResponse
     */
    protected function getResponseInstance()
    {
        return new SingleProxyTransferResponse();
    }
}

SingleProxyTransferResponseUnMarshaller::__init();
