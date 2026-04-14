<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindPreOrderPayRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindPreOrderPayRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindPreOrderPayRequestResponseUnMarshaller();
    }

    /**
     * @return BindPreOrderPayRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindPreOrderPayRequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindPreOrderPayRequestResponse();
    }
}

BindPreOrderPayRequestResponseUnMarshaller::__init();
