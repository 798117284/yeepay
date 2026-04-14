<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliCapitalTransferQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliCapitalTransferQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliCapitalTransferQueryResponseUnMarshaller();
    }

    /**
     * @return AliCapitalTransferQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliCapitalTransferQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AliCapitalTransferQueryResponse();
    }
}

AliCapitalTransferQueryResponseUnMarshaller::__init();
