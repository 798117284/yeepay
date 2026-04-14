<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceDivideBatchBackApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceDivideBatchBackApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceDivideBatchBackApplyV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceDivideBatchBackApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceDivideBatchBackApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceDivideBatchBackApplyV10Response();
    }
}

BalanceDivideBatchBackApplyV10ResponseUnMarshaller::__init();
