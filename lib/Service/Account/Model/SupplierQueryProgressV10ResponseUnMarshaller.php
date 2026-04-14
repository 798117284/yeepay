<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierQueryProgressV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierQueryProgressV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierQueryProgressV10ResponseUnMarshaller();
    }

    /**
     * @return SupplierQueryProgressV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierQueryProgressV10Response
     */
    protected function getResponseInstance()
    {
        return new SupplierQueryProgressV10Response();
    }
}

SupplierQueryProgressV10ResponseUnMarshaller::__init();
