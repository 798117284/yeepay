<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillFlowQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillFlowQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillFlowQueryV10ResponseUnMarshaller();
    }

    /**
     * @return BillFundbillFlowQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillFlowQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new BillFundbillFlowQueryV10Response();
    }
}

BillFundbillFlowQueryV10ResponseUnMarshaller::__init();
