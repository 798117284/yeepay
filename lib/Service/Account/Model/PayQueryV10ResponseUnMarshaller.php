<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PayQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PayQueryV10Response();
    }
}

PayQueryV10ResponseUnMarshaller::__init();
