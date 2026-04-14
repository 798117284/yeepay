<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderCloseV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderCloseV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderCloseV10ResponseUnMarshaller();
    }

    /**
     * @return OrderCloseV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderCloseV10Response
     */
    protected function getResponseInstance()
    {
        return new OrderCloseV10Response();
    }
}

OrderCloseV10ResponseUnMarshaller::__init();
