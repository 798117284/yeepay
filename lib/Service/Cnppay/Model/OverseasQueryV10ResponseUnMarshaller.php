<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OverseasQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OverseasQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasQueryV10ResponseUnMarshaller();
    }

    /**
     * @return OverseasQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OverseasQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new OverseasQueryV10Response();
    }
}

OverseasQueryV10ResponseUnMarshaller::__init();
