<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookBalanceUnfreezeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookBalanceUnfreezeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookBalanceUnfreezeResponseUnMarshaller();
    }

    /**
     * @return AccountBookBalanceUnfreezeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookBalanceUnfreezeResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBookBalanceUnfreezeResponse();
    }
}

AccountBookBalanceUnfreezeResponseUnMarshaller::__init();
