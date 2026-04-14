<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageAccountQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageAccountQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageAccountQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AccountManageAccountQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageAccountQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountManageAccountQueryV10Response();
    }
}

AccountManageAccountQueryV10ResponseUnMarshaller::__init();
