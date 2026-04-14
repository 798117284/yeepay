<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SignV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SignV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SignV10ResponseUnMarshaller();
    }

    /**
     * @return SignV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SignV10Response
     */
    protected function getResponseInstance()
    {
        return new SignV10Response();
    }
}

SignV10ResponseUnMarshaller::__init();
