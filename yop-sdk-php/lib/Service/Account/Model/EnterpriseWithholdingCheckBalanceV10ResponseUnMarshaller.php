<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseWithholdingCheckBalanceV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseWithholdingCheckBalanceV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseWithholdingCheckBalanceV10ResponseUnMarshaller();
    }

    /**
     * @return EnterpriseWithholdingCheckBalanceV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseWithholdingCheckBalanceV10Response
     */
    protected function getResponseInstance()
    {
        return new EnterpriseWithholdingCheckBalanceV10Response();
    }
}

EnterpriseWithholdingCheckBalanceV10ResponseUnMarshaller::__init();
