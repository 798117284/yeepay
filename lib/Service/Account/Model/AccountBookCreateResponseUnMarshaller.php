<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookCreateResponseUnMarshaller();
    }

    /**
     * @return AccountBookCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookCreateResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBookCreateResponse();
    }
}

AccountBookCreateResponseUnMarshaller::__init();
