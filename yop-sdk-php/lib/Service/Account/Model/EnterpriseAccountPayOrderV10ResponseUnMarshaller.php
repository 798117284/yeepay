<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAccountPayOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAccountPayOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAccountPayOrderV10ResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAccountPayOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAccountPayOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAccountPayOrderV10Response();
    }
}

EnterpriseAccountPayOrderV10ResponseUnMarshaller::__init();
