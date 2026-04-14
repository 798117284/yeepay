<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionSubsidyLimitQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionSubsidyLimitQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionSubsidyLimitQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PromtionSubsidyLimitQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionSubsidyLimitQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PromtionSubsidyLimitQueryV10Response();
    }
}

PromtionSubsidyLimitQueryV10ResponseUnMarshaller::__init();
