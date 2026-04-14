<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountInfoConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountInfoConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountInfoConfirmResponseUnMarshaller();
    }

    /**
     * @return AccountInfoConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountInfoConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new AccountInfoConfirmResponse();
    }
}

AccountInfoConfirmResponseUnMarshaller::__init();
