<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderV10ResponseUnMarshaller();
    }

    /**
     * @return OrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderV10Response
     */
    protected function getResponseInstance()
    {
        return new OrderV10Response();
    }
}

OrderV10ResponseUnMarshaller::__init();
