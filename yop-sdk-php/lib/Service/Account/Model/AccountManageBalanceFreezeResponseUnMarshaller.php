<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBalanceFreezeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBalanceFreezeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBalanceFreezeResponseUnMarshaller();
    }

    /**
     * @return AccountManageBalanceFreezeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBalanceFreezeResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageBalanceFreezeResponse();
    }
}

AccountManageBalanceFreezeResponseUnMarshaller::__init();
