<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleUpdateResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleUpdateResponse();
    }
}

YeeDivideRuleUpdateResponseUnMarshaller::__init();
