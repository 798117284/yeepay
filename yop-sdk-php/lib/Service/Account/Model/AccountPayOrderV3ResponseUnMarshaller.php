<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountPayOrderV3ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountPayOrderV3ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountPayOrderV3ResponseUnMarshaller();
    }

    /**
     * @return AccountPayOrderV3ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountPayOrderV3Response
     */
    protected function getResponseInstance()
    {
        return new AccountPayOrderV3Response();
    }
}

AccountPayOrderV3ResponseUnMarshaller::__init();
