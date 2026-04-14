<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageAccountOpenV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageAccountOpenV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageAccountOpenV10ResponseUnMarshaller();
    }

    /**
     * @return AccountManageAccountOpenV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageAccountOpenV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountManageAccountOpenV10Response();
    }
}

AccountManageAccountOpenV10ResponseUnMarshaller::__init();
