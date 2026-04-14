<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierPayOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierPayOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierPayOrderV10ResponseUnMarshaller();
    }

    /**
     * @return SupplierPayOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierPayOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new SupplierPayOrderV10Response();
    }
}

SupplierPayOrderV10ResponseUnMarshaller::__init();
