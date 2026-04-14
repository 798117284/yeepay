<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2bOrderAuditSendSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2bOrderAuditSendSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2bOrderAuditSendSmsResponseUnMarshaller();
    }

    /**
     * @return TransferB2bOrderAuditSendSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2bOrderAuditSendSmsResponse
     */
    protected function getResponseInstance()
    {
        return new TransferB2bOrderAuditSendSmsResponse();
    }
}

TransferB2bOrderAuditSendSmsResponseUnMarshaller::__init();
