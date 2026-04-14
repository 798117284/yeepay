<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserLoginResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserLoginResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserLoginResponseUnMarshaller();
    }

    /**
     * @return UserLoginResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserLoginResponse
     */
    protected function getResponseInstance()
    {
        return new UserLoginResponse();
    }
}

UserLoginResponseUnMarshaller::__init();
