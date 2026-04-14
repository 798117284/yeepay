<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserBookWithdrawOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserBookWithdrawOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserBookWithdrawOrderResponseUnMarshaller();
    }

    /**
     * @return UserBookWithdrawOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserBookWithdrawOrderResponse
     */
    protected function getResponseInstance()
    {
        return new UserBookWithdrawOrderResponse();
    }
}

UserBookWithdrawOrderResponseUnMarshaller::__init();
