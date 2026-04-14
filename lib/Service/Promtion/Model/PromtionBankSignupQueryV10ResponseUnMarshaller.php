<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionBankSignupQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionBankSignupQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionBankSignupQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PromtionBankSignupQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionBankSignupQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PromtionBankSignupQueryV10Response();
    }
}

PromtionBankSignupQueryV10ResponseUnMarshaller::__init();
