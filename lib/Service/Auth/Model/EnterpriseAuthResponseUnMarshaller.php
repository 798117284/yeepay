<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAuthResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAuthResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAuthResponse();
    }
}

EnterpriseAuthResponseUnMarshaller::__init();
