<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcCommissionQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcCommissionQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcCommissionQueryResponseUnMarshaller();
    }

    /**
     * @return OcCommissionQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcCommissionQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OcCommissionQueryResponse();
    }
}

OcCommissionQueryResponseUnMarshaller::__init();
