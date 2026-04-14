<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleDelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleDelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleDelResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleDelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleDelResponse
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleDelResponse();
    }
}

YeeDivideRuleDelResponseUnMarshaller::__init();
