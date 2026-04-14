<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AddUserBankcardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AddUserBankcardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AddUserBankcardResponseUnMarshaller();
    }

    /**
     * @return AddUserBankcardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AddUserBankcardResponse
     */
    protected function getResponseInstance()
    {
        return new AddUserBankcardResponse();
    }
}

AddUserBankcardResponseUnMarshaller::__init();
