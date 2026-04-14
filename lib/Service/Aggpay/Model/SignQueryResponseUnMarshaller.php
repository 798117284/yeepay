<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SignQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SignQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SignQueryResponseUnMarshaller();
    }

    /**
     * @return SignQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SignQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SignQueryResponse();
    }
}

SignQueryResponseUnMarshaller::__init();
