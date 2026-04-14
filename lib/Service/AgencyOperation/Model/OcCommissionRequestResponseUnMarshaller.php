<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcCommissionRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcCommissionRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcCommissionRequestResponseUnMarshaller();
    }

    /**
     * @return OcCommissionRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcCommissionRequestResponse
     */
    protected function getResponseInstance()
    {
        return new OcCommissionRequestResponse();
    }
}

OcCommissionRequestResponseUnMarshaller::__init();
