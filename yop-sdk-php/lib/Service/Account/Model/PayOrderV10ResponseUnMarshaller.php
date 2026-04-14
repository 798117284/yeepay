<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayOrderV10ResponseUnMarshaller();
    }

    /**
     * @return PayOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new PayOrderV10Response();
    }
}

PayOrderV10ResponseUnMarshaller::__init();
