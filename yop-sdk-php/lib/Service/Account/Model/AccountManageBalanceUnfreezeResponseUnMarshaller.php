<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBalanceUnfreezeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBalanceUnfreezeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBalanceUnfreezeResponseUnMarshaller();
    }

    /**
     * @return AccountManageBalanceUnfreezeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBalanceUnfreezeResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageBalanceUnfreezeResponse();
    }
}

AccountManageBalanceUnfreezeResponseUnMarshaller::__init();
