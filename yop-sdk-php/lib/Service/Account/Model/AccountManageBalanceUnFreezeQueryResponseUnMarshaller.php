<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBalanceUnFreezeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBalanceUnFreezeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBalanceUnFreezeQueryResponseUnMarshaller();
    }

    /**
     * @return AccountManageBalanceUnFreezeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBalanceUnFreezeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageBalanceUnFreezeQueryResponse();
    }
}

AccountManageBalanceUnFreezeQueryResponseUnMarshaller::__init();
