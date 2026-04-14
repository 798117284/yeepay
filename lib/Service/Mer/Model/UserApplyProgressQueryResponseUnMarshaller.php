<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserApplyProgressQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserApplyProgressQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserApplyProgressQueryResponseUnMarshaller();
    }

    /**
     * @return UserApplyProgressQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserApplyProgressQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UserApplyProgressQueryResponse();
    }
}

UserApplyProgressQueryResponseUnMarshaller::__init();
