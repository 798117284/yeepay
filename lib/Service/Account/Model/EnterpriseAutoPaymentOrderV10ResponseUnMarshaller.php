<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAutoPaymentOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAutoPaymentOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAutoPaymentOrderV10ResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAutoPaymentOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAutoPaymentOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAutoPaymentOrderV10Response();
    }
}

EnterpriseAutoPaymentOrderV10ResponseUnMarshaller::__init();
