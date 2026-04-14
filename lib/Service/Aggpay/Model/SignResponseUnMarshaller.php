<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SignResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SignResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SignResponseUnMarshaller();
    }

    /**
     * @return SignResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SignResponse
     */
    protected function getResponseInstance()
    {
        return new SignResponse();
    }
}

SignResponseUnMarshaller::__init();
