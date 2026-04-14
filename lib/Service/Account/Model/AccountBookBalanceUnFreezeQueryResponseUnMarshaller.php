<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookBalanceUnFreezeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookBalanceUnFreezeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookBalanceUnFreezeQueryResponseUnMarshaller();
    }

    /**
     * @return AccountBookBalanceUnFreezeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookBalanceUnFreezeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBookBalanceUnFreezeQueryResponse();
    }
}

AccountBookBalanceUnFreezeQueryResponseUnMarshaller::__init();
