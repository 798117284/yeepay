<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ExternalOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ExternalOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ExternalOrderV10ResponseUnMarshaller();
    }

    /**
     * @return ExternalOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ExternalOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new ExternalOrderV10Response();
    }
}

ExternalOrderV10ResponseUnMarshaller::__init();
