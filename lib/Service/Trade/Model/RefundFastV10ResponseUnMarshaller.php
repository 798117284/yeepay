<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundFastV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundFastV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundFastV10ResponseUnMarshaller();
    }

    /**
     * @return RefundFastV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundFastV10Response
     */
    protected function getResponseInstance()
    {
        return new RefundFastV10Response();
    }
}

RefundFastV10ResponseUnMarshaller::__init();
