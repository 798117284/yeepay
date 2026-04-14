<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageAccountOpenV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageAccountOpenV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageAccountOpenV2ResponseUnMarshaller();
    }

    /**
     * @return AccountManageAccountOpenV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageAccountOpenV2Response
     */
    protected function getResponseInstance()
    {
        return new AccountManageAccountOpenV2Response();
    }
}

AccountManageAccountOpenV2ResponseUnMarshaller::__init();
