<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggCloseOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggCloseOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggCloseOrderV10ResponseUnMarshaller();
    }

    /**
     * @return AggCloseOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggCloseOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new AggCloseOrderV10Response();
    }
}

AggCloseOrderV10ResponseUnMarshaller::__init();
