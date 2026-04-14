<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseWithholdingOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseWithholdingOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseWithholdingOrderV10ResponseUnMarshaller();
    }

    /**
     * @return EnterpriseWithholdingOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseWithholdingOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new EnterpriseWithholdingOrderV10Response();
    }
}

EnterpriseWithholdingOrderV10ResponseUnMarshaller::__init();
