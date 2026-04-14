<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CloseOrderV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CloseOrderV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CloseOrderV20ResponseUnMarshaller();
    }

    /**
     * @return CloseOrderV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CloseOrderV20Response
     */
    protected function getResponseInstance()
    {
        return new CloseOrderV20Response();
    }
}

CloseOrderV20ResponseUnMarshaller::__init();
