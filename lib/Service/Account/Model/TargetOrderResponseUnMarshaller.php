<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TargetOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TargetOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TargetOrderResponseUnMarshaller();
    }

    /**
     * @return TargetOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TargetOrderResponse
     */
    protected function getResponseInstance()
    {
        return new TargetOrderResponse();
    }
}

TargetOrderResponseUnMarshaller::__init();
