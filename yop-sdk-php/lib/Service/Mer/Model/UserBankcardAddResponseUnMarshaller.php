<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserBankcardAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserBankcardAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserBankcardAddResponseUnMarshaller();
    }

    /**
     * @return UserBankcardAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserBankcardAddResponse
     */
    protected function getResponseInstance()
    {
        return new UserBankcardAddResponse();
    }
}

UserBankcardAddResponseUnMarshaller::__init();
