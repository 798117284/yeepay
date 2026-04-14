<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseTokenPayOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseTokenPayOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseTokenPayOrderV10ResponseUnMarshaller();
    }

    /**
     * @return EnterpriseTokenPayOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseTokenPayOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new EnterpriseTokenPayOrderV10Response();
    }
}

EnterpriseTokenPayOrderV10ResponseUnMarshaller::__init();
