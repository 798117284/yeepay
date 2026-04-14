<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionSubsidyVerifyQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionSubsidyVerifyQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionSubsidyVerifyQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PromtionSubsidyVerifyQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionSubsidyVerifyQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PromtionSubsidyVerifyQueryV10Response();
    }
}

PromtionSubsidyVerifyQueryV10ResponseUnMarshaller::__init();
