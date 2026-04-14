<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OverseasPayConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OverseasPayConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasPayConfirmResponseUnMarshaller();
    }

    /**
     * @return OverseasPayConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OverseasPayConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new OverseasPayConfirmResponse();
    }
}

OverseasPayConfirmResponseUnMarshaller::__init();
