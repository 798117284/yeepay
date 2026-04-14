<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindpayPreorderRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindpayPreorderRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindpayPreorderRequestResponseUnMarshaller();
    }

    /**
     * @return BindpayPreorderRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindpayPreorderRequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindpayPreorderRequestResponse();
    }
}

BindpayPreorderRequestResponseUnMarshaller::__init();
