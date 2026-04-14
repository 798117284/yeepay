<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAutoPaymentOrderHlzhResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAutoPaymentOrderHlzhResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAutoPaymentOrderHlzhResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAutoPaymentOrderHlzhResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAutoPaymentOrderHlzhResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAutoPaymentOrderHlzhResponse();
    }
}

EnterpriseAutoPaymentOrderHlzhResponseUnMarshaller::__init();
