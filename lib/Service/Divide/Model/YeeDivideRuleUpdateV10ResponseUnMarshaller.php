<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleUpdateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleUpdateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleUpdateV10ResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleUpdateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleUpdateV10Response
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleUpdateV10Response();
    }
}

YeeDivideRuleUpdateV10ResponseUnMarshaller::__init();
