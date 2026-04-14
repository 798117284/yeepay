<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillApplyV10ResponseUnMarshaller();
    }

    /**
     * @return BillFundbillApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new BillFundbillApplyV10Response();
    }
}

BillFundbillApplyV10ResponseUnMarshaller::__init();
