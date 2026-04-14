<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayOrderAuditSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayOrderAuditSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayOrderAuditSmsResponseUnMarshaller();
    }

    /**
     * @return PayOrderAuditSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayOrderAuditSmsResponse
     */
    protected function getResponseInstance()
    {
        return new PayOrderAuditSmsResponse();
    }
}

PayOrderAuditSmsResponseUnMarshaller::__init();
