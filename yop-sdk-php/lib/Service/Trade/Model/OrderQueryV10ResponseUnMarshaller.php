<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderQueryV10ResponseUnMarshaller();
    }

    /**
     * @return OrderQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new OrderQueryV10Response();
    }
}

OrderQueryV10ResponseUnMarshaller::__init();
