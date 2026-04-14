<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAutoPaymentQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAutoPaymentQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAutoPaymentQueryV10ResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAutoPaymentQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAutoPaymentQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAutoPaymentQueryV10Response();
    }
}

EnterpriseAutoPaymentQueryV10ResponseUnMarshaller::__init();
