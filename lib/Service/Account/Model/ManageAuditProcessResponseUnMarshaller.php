<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditProcessResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditProcessResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditProcessResponseUnMarshaller();
    }

    /**
     * @return ManageAuditProcessResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditProcessResponse
     */
    protected function getResponseInstance()
    {
        return new ManageAuditProcessResponse();
    }
}

ManageAuditProcessResponseUnMarshaller::__init();
