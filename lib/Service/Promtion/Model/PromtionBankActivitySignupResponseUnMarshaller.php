<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionBankActivitySignupResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionBankActivitySignupResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionBankActivitySignupResponseUnMarshaller();
    }

    /**
     * @return PromtionBankActivitySignupResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionBankActivitySignupResponse
     */
    protected function getResponseInstance()
    {
        return new PromtionBankActivitySignupResponse();
    }
}

PromtionBankActivitySignupResponseUnMarshaller::__init();
