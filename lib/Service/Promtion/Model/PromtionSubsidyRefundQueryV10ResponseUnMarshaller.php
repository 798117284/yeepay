<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionSubsidyRefundQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionSubsidyRefundQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionSubsidyRefundQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PromtionSubsidyRefundQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionSubsidyRefundQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PromtionSubsidyRefundQueryV10Response();
    }
}

PromtionSubsidyRefundQueryV10ResponseUnMarshaller::__init();
