<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierQueryV10ResponseUnMarshaller();
    }

    /**
     * @return SupplierQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new SupplierQueryV10Response();
    }
}

SupplierQueryV10ResponseUnMarshaller::__init();
