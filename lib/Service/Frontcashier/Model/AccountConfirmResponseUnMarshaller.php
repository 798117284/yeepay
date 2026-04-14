<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountConfirmResponseUnMarshaller();
    }

    /**
     * @return AccountConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new AccountConfirmResponse();
    }
}

AccountConfirmResponseUnMarshaller::__init();
