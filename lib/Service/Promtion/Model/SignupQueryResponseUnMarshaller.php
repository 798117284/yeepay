<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SignupQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SignupQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SignupQueryResponseUnMarshaller();
    }

    /**
     * @return SignupQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SignupQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SignupQueryResponse();
    }
}

SignupQueryResponseUnMarshaller::__init();
