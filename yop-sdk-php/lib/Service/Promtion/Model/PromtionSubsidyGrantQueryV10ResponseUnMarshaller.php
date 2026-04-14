<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionSubsidyGrantQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionSubsidyGrantQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionSubsidyGrantQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PromtionSubsidyGrantQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionSubsidyGrantQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PromtionSubsidyGrantQueryV10Response();
    }
}

PromtionSubsidyGrantQueryV10ResponseUnMarshaller::__init();
