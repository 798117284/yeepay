<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceDivideBackApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceDivideBackApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceDivideBackApplyV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceDivideBackApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceDivideBackApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceDivideBackApplyV10Response();
    }
}

BalanceDivideBackApplyV10ResponseUnMarshaller::__init();
