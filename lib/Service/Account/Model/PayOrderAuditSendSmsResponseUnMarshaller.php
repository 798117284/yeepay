<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayOrderAuditSendSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayOrderAuditSendSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayOrderAuditSendSmsResponseUnMarshaller();
    }

    /**
     * @return PayOrderAuditSendSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayOrderAuditSendSmsResponse
     */
    protected function getResponseInstance()
    {
        return new PayOrderAuditSendSmsResponse();
    }
}

PayOrderAuditSendSmsResponseUnMarshaller::__init();
