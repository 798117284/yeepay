<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookBalanceFreezeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookBalanceFreezeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookBalanceFreezeQueryResponseUnMarshaller();
    }

    /**
     * @return AccountBookBalanceFreezeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookBalanceFreezeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBookBalanceFreezeQueryResponse();
    }
}

AccountBookBalanceFreezeQueryResponseUnMarshaller::__init();
