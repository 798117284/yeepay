<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleQueryV10ResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleQueryV10Response();
    }
}

YeeDivideRuleQueryV10ResponseUnMarshaller::__init();
