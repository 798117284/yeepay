<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserBankcardBindResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserBankcardBindResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserBankcardBindResponseUnMarshaller();
    }

    /**
     * @return UserBankcardBindResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserBankcardBindResponse
     */
    protected function getResponseInstance()
    {
        return new UserBankcardBindResponse();
    }
}

UserBankcardBindResponseUnMarshaller::__init();
