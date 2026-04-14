<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SignQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SignQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SignQueryV10ResponseUnMarshaller();
    }

    /**
     * @return SignQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SignQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new SignQueryV10Response();
    }
}

SignQueryV10ResponseUnMarshaller::__init();
