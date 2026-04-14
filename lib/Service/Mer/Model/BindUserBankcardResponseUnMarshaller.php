<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindUserBankcardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindUserBankcardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindUserBankcardResponseUnMarshaller();
    }

    /**
     * @return BindUserBankcardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindUserBankcardResponse
     */
    protected function getResponseInstance()
    {
        return new BindUserBankcardResponse();
    }
}

BindUserBankcardResponseUnMarshaller::__init();
