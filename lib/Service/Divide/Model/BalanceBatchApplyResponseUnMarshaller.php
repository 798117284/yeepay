<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceBatchApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceBatchApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceBatchApplyResponseUnMarshaller();
    }

    /**
     * @return BalanceBatchApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceBatchApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BalanceBatchApplyResponse();
    }
}

BalanceBatchApplyResponseUnMarshaller::__init();
