<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAccountBookPayOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAccountBookPayOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAccountBookPayOrderV10ResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAccountBookPayOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAccountBookPayOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAccountBookPayOrderV10Response();
    }
}

EnterpriseAccountBookPayOrderV10ResponseUnMarshaller::__init();
