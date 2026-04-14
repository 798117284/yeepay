<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditProcessV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditProcessV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditProcessV10ResponseUnMarshaller();
    }

    /**
     * @return ManageAuditProcessV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditProcessV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageAuditProcessV10Response();
    }
}

ManageAuditProcessV10ResponseUnMarshaller::__init();
