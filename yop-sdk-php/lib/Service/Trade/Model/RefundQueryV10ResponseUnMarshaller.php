<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundQueryV10ResponseUnMarshaller();
    }

    /**
     * @return RefundQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new RefundQueryV10Response();
    }
}

RefundQueryV10ResponseUnMarshaller::__init();
