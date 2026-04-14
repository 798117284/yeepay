<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountSignContractQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountSignContractQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountSignContractQueryResponseUnMarshaller();
    }

    /**
     * @return UnionAccountSignContractQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountSignContractQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountSignContractQueryResponse();
    }
}

UnionAccountSignContractQueryResponseUnMarshaller::__init();
