<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnsignResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnsignResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnsignResponseUnMarshaller();
    }

    /**
     * @return UnsignResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnsignResponse
     */
    protected function getResponseInstance()
    {
        return new UnsignResponse();
    }
}

UnsignResponseUnMarshaller::__init();
