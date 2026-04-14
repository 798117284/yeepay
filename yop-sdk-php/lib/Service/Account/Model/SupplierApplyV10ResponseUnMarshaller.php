<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierApplyV10ResponseUnMarshaller();
    }

    /**
     * @return SupplierApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new SupplierApplyV10Response();
    }
}

SupplierApplyV10ResponseUnMarshaller::__init();
