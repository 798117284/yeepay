<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PrepayCompleteV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PrepayCompleteV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PrepayCompleteV10ResponseUnMarshaller();
    }

    /**
     * @return PrepayCompleteV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PrepayCompleteV10Response
     */
    protected function getResponseInstance()
    {
        return new PrepayCompleteV10Response();
    }
}

PrepayCompleteV10ResponseUnMarshaller::__init();
