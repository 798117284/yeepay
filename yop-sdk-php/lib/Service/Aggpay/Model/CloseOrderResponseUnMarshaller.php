<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CloseOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CloseOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CloseOrderResponseUnMarshaller();
    }

    /**
     * @return CloseOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CloseOrderResponse
     */
    protected function getResponseInstance()
    {
        return new CloseOrderResponse();
    }
}

CloseOrderResponseUnMarshaller::__init();
