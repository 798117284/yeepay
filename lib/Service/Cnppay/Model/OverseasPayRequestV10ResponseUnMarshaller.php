<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OverseasPayRequestV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OverseasPayRequestV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasPayRequestV10ResponseUnMarshaller();
    }

    /**
     * @return OverseasPayRequestV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OverseasPayRequestV10Response
     */
    protected function getResponseInstance()
    {
        return new OverseasPayRequestV10Response();
    }
}

OverseasPayRequestV10ResponseUnMarshaller::__init();
