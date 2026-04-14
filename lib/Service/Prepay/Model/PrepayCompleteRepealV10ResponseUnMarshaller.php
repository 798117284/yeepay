<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PrepayCompleteRepealV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PrepayCompleteRepealV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PrepayCompleteRepealV10ResponseUnMarshaller();
    }

    /**
     * @return PrepayCompleteRepealV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PrepayCompleteRepealV10Response
     */
    protected function getResponseInstance()
    {
        return new PrepayCompleteRepealV10Response();
    }
}

PrepayCompleteRepealV10ResponseUnMarshaller::__init();
