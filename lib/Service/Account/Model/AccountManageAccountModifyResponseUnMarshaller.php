<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageAccountModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageAccountModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageAccountModifyResponseUnMarshaller();
    }

    /**
     * @return AccountManageAccountModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageAccountModifyResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageAccountModifyResponse();
    }
}

AccountManageAccountModifyResponseUnMarshaller::__init();
