<?php

namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardCreateRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardCreateRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardCreateRequestResponseUnMarshaller();
    }

    /**
     * @return BindcardCreateRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardCreateRequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardCreateRequestResponse();
    }
}

BindcardCreateRequestResponseUnMarshaller::__init();
