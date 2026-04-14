<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionBankActivityQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionBankActivityQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionBankActivityQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PromtionBankActivityQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionBankActivityQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PromtionBankActivityQueryV10Response();
    }
}

PromtionBankActivityQueryV10ResponseUnMarshaller::__init();
