<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundSupplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundSupplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundSupplyV10ResponseUnMarshaller();
    }

    /**
     * @return RefundSupplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundSupplyV10Response
     */
    protected function getResponseInstance()
    {
        return new RefundSupplyV10Response();
    }
}

RefundSupplyV10ResponseUnMarshaller::__init();
