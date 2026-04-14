<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PrepayRepealV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PrepayRepealV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PrepayRepealV10ResponseUnMarshaller();
    }

    /**
     * @return PrepayRepealV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PrepayRepealV10Response
     */
    protected function getResponseInstance()
    {
        return new PrepayRepealV10Response();
    }
}

PrepayRepealV10ResponseUnMarshaller::__init();
