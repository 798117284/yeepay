<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundEndV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundEndV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundEndV10ResponseUnMarshaller();
    }

    /**
     * @return RefundEndV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundEndV10Response
     */
    protected function getResponseInstance()
    {
        return new RefundEndV10Response();
    }
}

RefundEndV10ResponseUnMarshaller::__init();
