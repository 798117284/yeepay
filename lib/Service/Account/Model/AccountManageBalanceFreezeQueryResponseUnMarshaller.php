<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBalanceFreezeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBalanceFreezeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBalanceFreezeQueryResponseUnMarshaller();
    }

    /**
     * @return AccountManageBalanceFreezeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBalanceFreezeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageBalanceFreezeQueryResponse();
    }
}

AccountManageBalanceFreezeQueryResponseUnMarshaller::__init();
