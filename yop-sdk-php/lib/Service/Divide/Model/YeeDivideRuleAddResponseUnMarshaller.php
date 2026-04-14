<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleAddResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleAddResponse
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleAddResponse();
    }
}

YeeDivideRuleAddResponseUnMarshaller::__init();
