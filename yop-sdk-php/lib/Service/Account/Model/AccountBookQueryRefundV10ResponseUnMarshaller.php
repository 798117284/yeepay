<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookQueryRefundV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookQueryRefundV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookQueryRefundV10ResponseUnMarshaller();
    }

    /**
     * @return AccountBookQueryRefundV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookQueryRefundV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountBookQueryRefundV10Response();
    }
}

AccountBookQueryRefundV10ResponseUnMarshaller::__init();
