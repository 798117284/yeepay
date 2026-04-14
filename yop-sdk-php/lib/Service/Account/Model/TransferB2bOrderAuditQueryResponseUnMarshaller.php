<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2bOrderAuditQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2bOrderAuditQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2bOrderAuditQueryResponseUnMarshaller();
    }

    /**
     * @return TransferB2bOrderAuditQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2bOrderAuditQueryResponse
     */
    protected function getResponseInstance()
    {
        return new TransferB2bOrderAuditQueryResponse();
    }
}

TransferB2bOrderAuditQueryResponseUnMarshaller::__init();
