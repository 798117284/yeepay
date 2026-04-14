<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceDivideBackReceiptV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceDivideBackReceiptV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceDivideBackReceiptV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceDivideBackReceiptV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceDivideBackReceiptV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceDivideBackReceiptV10Response();
    }
}

BalanceDivideBackReceiptV10ResponseUnMarshaller::__init();
