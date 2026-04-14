<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2bOrderAuditSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2bOrderAuditSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2bOrderAuditSmsResponseUnMarshaller();
    }

    /**
     * @return TransferB2bOrderAuditSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2bOrderAuditSmsResponse
     */
    protected function getResponseInstance()
    {
        return new TransferB2bOrderAuditSmsResponse();
    }
}

TransferB2bOrderAuditSmsResponseUnMarshaller::__init();
