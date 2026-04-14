<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundV10ResponseUnMarshaller();
    }

    /**
     * @return RefundV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundV10Response
     */
    protected function getResponseInstance()
    {
        return new RefundV10Response();
    }
}

RefundV10ResponseUnMarshaller::__init();
