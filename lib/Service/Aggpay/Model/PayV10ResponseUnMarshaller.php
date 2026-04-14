<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayV10ResponseUnMarshaller();
    }

    /**
     * @return PayV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayV10Response
     */
    protected function getResponseInstance()
    {
        return new PayV10Response();
    }
}

PayV10ResponseUnMarshaller::__init();
