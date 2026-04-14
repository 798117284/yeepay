<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountAliBatchProxyTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountAliBatchProxyTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountAliBatchProxyTransferResponseUnMarshaller();
    }

    /**
     * @return UnionAccountAliBatchProxyTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountAliBatchProxyTransferResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountAliBatchProxyTransferResponse();
    }
}

UnionAccountAliBatchProxyTransferResponseUnMarshaller::__init();
