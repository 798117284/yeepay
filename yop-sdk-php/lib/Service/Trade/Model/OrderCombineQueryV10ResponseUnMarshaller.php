<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderCombineQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderCombineQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderCombineQueryV10ResponseUnMarshaller();
    }

    /**
     * @return OrderCombineQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderCombineQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new OrderCombineQueryV10Response();
    }
}

OrderCombineQueryV10ResponseUnMarshaller::__init();
