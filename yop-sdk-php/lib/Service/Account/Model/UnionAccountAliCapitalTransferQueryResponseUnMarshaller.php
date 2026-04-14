<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountAliCapitalTransferQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountAliCapitalTransferQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountAliCapitalTransferQueryResponseUnMarshaller();
    }

    /**
     * @return UnionAccountAliCapitalTransferQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountAliCapitalTransferQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountAliCapitalTransferQueryResponse();
    }
}

UnionAccountAliCapitalTransferQueryResponseUnMarshaller::__init();
