<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundCombineResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundCombineResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundCombineResponseUnMarshaller();
    }

    /**
     * @return RefundCombineResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundCombineResponse
     */
    protected function getResponseInstance()
    {
        return new RefundCombineResponse();
    }
}

RefundCombineResponseUnMarshaller::__init();
