<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleAddV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleAddV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleAddV10ResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleAddV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleAddV10Response
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleAddV10Response();
    }
}

YeeDivideRuleAddV10ResponseUnMarshaller::__init();
