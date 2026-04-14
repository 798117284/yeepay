<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayOrderV3ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayOrderV3ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayOrderV3ResponseUnMarshaller();
    }

    /**
     * @return PayOrderV3ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayOrderV3Response
     */
    protected function getResponseInstance()
    {
        return new PayOrderV3Response();
    }
}

PayOrderV3ResponseUnMarshaller::__init();
