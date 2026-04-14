<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PrePayV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PrePayV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PrePayV10ResponseUnMarshaller();
    }

    /**
     * @return PrePayV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PrePayV10Response
     */
    protected function getResponseInstance()
    {
        return new PrePayV10Response();
    }
}

PrePayV10ResponseUnMarshaller::__init();
