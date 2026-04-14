<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleDelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleDelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleDelV10ResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleDelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleDelV10Response
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleDelV10Response();
    }
}

YeeDivideRuleDelV10ResponseUnMarshaller::__init();
