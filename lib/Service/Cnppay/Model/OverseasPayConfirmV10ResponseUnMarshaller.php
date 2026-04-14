<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OverseasPayConfirmV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OverseasPayConfirmV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasPayConfirmV10ResponseUnMarshaller();
    }

    /**
     * @return OverseasPayConfirmV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OverseasPayConfirmV10Response
     */
    protected function getResponseInstance()
    {
        return new OverseasPayConfirmV10Response();
    }
}

OverseasPayConfirmV10ResponseUnMarshaller::__init();
