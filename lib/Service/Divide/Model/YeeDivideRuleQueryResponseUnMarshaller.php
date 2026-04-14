<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YeeDivideRuleQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YeeDivideRuleQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YeeDivideRuleQueryResponseUnMarshaller();
    }

    /**
     * @return YeeDivideRuleQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YeeDivideRuleQueryResponse
     */
    protected function getResponseInstance()
    {
        return new YeeDivideRuleQueryResponse();
    }
}

YeeDivideRuleQueryResponseUnMarshaller::__init();
