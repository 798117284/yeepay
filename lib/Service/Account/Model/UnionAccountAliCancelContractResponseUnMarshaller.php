<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountAliCancelContractResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountAliCancelContractResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountAliCancelContractResponseUnMarshaller();
    }

    /**
     * @return UnionAccountAliCancelContractResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountAliCancelContractResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountAliCancelContractResponse();
    }
}

UnionAccountAliCancelContractResponseUnMarshaller::__init();
