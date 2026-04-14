<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TutelagePrePayV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TutelagePrePayV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TutelagePrePayV10ResponseUnMarshaller();
    }

    /**
     * @return TutelagePrePayV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TutelagePrePayV10Response
     */
    protected function getResponseInstance()
    {
        return new TutelagePrePayV10Response();
    }
}

TutelagePrePayV10ResponseUnMarshaller::__init();
