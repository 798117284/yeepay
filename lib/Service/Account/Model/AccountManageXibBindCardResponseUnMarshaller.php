<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageXibBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageXibBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageXibBindCardResponseUnMarshaller();
    }

    /**
     * @return AccountManageXibBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageXibBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageXibBindCardResponse();
    }
}

AccountManageXibBindCardResponseUnMarshaller::__init();
