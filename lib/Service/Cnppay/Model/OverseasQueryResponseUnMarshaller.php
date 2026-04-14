<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OverseasQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OverseasQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasQueryResponseUnMarshaller();
    }

    /**
     * @return OverseasQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OverseasQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OverseasQueryResponse();
    }
}

OverseasQueryResponseUnMarshaller::__init();
