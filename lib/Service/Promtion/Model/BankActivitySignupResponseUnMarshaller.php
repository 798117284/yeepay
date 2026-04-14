<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankActivitySignupResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankActivitySignupResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankActivitySignupResponseUnMarshaller();
    }

    /**
     * @return BankActivitySignupResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankActivitySignupResponse
     */
    protected function getResponseInstance()
    {
        return new BankActivitySignupResponse();
    }
}

BankActivitySignupResponseUnMarshaller::__init();
