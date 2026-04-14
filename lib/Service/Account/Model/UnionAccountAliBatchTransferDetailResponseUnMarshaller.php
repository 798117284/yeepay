<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountAliBatchTransferDetailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountAliBatchTransferDetailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountAliBatchTransferDetailResponseUnMarshaller();
    }

    /**
     * @return UnionAccountAliBatchTransferDetailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountAliBatchTransferDetailResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountAliBatchTransferDetailResponse();
    }
}

UnionAccountAliBatchTransferDetailResponseUnMarshaller::__init();
