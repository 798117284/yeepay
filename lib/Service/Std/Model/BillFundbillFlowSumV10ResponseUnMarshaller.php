<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillFlowSumV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillFlowSumV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillFlowSumV10ResponseUnMarshaller();
    }

    /**
     * @return BillFundbillFlowSumV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillFlowSumV10Response
     */
    protected function getResponseInstance()
    {
        return new BillFundbillFlowSumV10Response();
    }
}

BillFundbillFlowSumV10ResponseUnMarshaller::__init();
