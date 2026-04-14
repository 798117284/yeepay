<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceDivideReceiptV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceDivideReceiptV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceDivideReceiptV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceDivideReceiptV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceDivideReceiptV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceDivideReceiptV10Response();
    }
}

BalanceDivideReceiptV10ResponseUnMarshaller::__init();
