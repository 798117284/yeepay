<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseWithholdingCheckBalanceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseWithholdingCheckBalanceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseWithholdingCheckBalanceResponseUnMarshaller();
    }

    /**
     * @return EnterpriseWithholdingCheckBalanceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseWithholdingCheckBalanceResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseWithholdingCheckBalanceResponse();
    }
}

EnterpriseWithholdingCheckBalanceResponseUnMarshaller::__init();
