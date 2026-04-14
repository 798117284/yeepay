<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceBatchApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceBatchApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceBatchApplyV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceBatchApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceBatchApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceBatchApplyV10Response();
    }
}

BalanceBatchApplyV10ResponseUnMarshaller::__init();
