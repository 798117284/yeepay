<?php

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountQueryBalanceV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountQueryBalanceV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountQueryBalanceV10ResponseUnMarshaller();
    }

    /**
     * @return AccountQueryBalanceV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountQueryBalanceV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountQueryBalanceV10Response();
    }
}

AccountQueryBalanceV10ResponseUnMarshaller::__init();
