<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateUserResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateUserResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateUserResponseUnMarshaller();
    }

    /**
     * @return CreateUserResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateUserResponse
     */
    protected function getResponseInstance()
    {
        return new CreateUserResponse();
    }
}

CreateUserResponseUnMarshaller::__init();
