<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnsignV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnsignV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnsignV10ResponseUnMarshaller();
    }

    /**
     * @return UnsignV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnsignV10Response
     */
    protected function getResponseInstance()
    {
        return new UnsignV10Response();
    }
}

UnsignV10ResponseUnMarshaller::__init();
