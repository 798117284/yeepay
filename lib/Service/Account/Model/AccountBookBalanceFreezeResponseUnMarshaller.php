<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookBalanceFreezeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookBalanceFreezeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookBalanceFreezeResponseUnMarshaller();
    }

    /**
     * @return AccountBookBalanceFreezeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookBalanceFreezeResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBookBalanceFreezeResponse();
    }
}

AccountBookBalanceFreezeResponseUnMarshaller::__init();
