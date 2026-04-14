<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseRegisterResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseRegisterResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseRegisterResponseUnMarshaller();
    }

    /**
     * @return EnterpriseRegisterResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseRegisterResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseRegisterResponse();
    }
}

EnterpriseRegisterResponseUnMarshaller::__init();
