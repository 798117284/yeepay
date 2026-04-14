<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookRefundV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookRefundV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookRefundV10ResponseUnMarshaller();
    }

    /**
     * @return AccountBookRefundV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookRefundV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountBookRefundV10Response();
    }
}

AccountBookRefundV10ResponseUnMarshaller::__init();
