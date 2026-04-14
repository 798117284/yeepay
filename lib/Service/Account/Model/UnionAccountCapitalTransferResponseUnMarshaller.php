<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountCapitalTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountCapitalTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountCapitalTransferResponseUnMarshaller();
    }

    /**
     * @return UnionAccountCapitalTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountCapitalTransferResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountCapitalTransferResponse();
    }
}

UnionAccountCapitalTransferResponseUnMarshaller::__init();
