<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserApplyResponseUnMarshaller();
    }

    /**
     * @return UserApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserApplyResponse
     */
    protected function getResponseInstance()
    {
        return new UserApplyResponse();
    }
}

UserApplyResponseUnMarshaller::__init();
