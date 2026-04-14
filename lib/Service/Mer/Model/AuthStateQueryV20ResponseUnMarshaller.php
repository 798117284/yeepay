<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AuthStateQueryV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AuthStateQueryV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AuthStateQueryV20ResponseUnMarshaller();
    }

    /**
     * @return AuthStateQueryV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AuthStateQueryV20Response
     */
    protected function getResponseInstance()
    {
        return new AuthStateQueryV20Response();
    }
}

AuthStateQueryV20ResponseUnMarshaller::__init();
