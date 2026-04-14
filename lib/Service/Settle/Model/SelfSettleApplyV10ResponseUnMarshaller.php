<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SelfSettleApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SelfSettleApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SelfSettleApplyV10ResponseUnMarshaller();
    }

    /**
     * @return SelfSettleApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SelfSettleApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new SelfSettleApplyV10Response();
    }
}

SelfSettleApplyV10ResponseUnMarshaller::__init();
