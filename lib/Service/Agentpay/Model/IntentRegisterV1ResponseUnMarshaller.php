<?php

namespace Yeepay\Yop\Sdk\Service\Agentpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class IntentRegisterV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var IntentRegisterV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IntentRegisterV1ResponseUnMarshaller();
    }

    /**
     * @return IntentRegisterV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return IntentRegisterV1Response
     */
    protected function getResponseInstance()
    {
        return new IntentRegisterV1Response();
    }
}

IntentRegisterV1ResponseUnMarshaller::__init();
