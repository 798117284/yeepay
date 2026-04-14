<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CloseOrderV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CloseOrderV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CloseOrderV2ResponseUnMarshaller();
    }

    /**
     * @return CloseOrderV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CloseOrderV2Response
     */
    protected function getResponseInstance()
    {
        return new CloseOrderV2Response();
    }
}

CloseOrderV2ResponseUnMarshaller::__init();
