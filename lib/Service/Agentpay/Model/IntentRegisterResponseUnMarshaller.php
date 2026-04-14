<?php

namespace Yeepay\Yop\Sdk\Service\Agentpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class IntentRegisterResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var IntentRegisterResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IntentRegisterResponseUnMarshaller();
    }

    /**
     * @return IntentRegisterResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return IntentRegisterResponse
     */
    protected function getResponseInstance()
    {
        return new IntentRegisterResponse();
    }
}

IntentRegisterResponseUnMarshaller::__init();
