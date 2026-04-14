<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitEnterpriseRegisterResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitEnterpriseRegisterResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitEnterpriseRegisterResponseUnMarshaller();
    }

    /**
     * @return DigitEnterpriseRegisterResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitEnterpriseRegisterResponse
     */
    protected function getResponseInstance()
    {
        return new DigitEnterpriseRegisterResponse();
    }
}

DigitEnterpriseRegisterResponseUnMarshaller::__init();
