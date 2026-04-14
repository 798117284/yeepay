<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundCombineQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundCombineQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundCombineQueryResponseUnMarshaller();
    }

    /**
     * @return RefundCombineQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundCombineQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RefundCombineQueryResponse();
    }
}

RefundCombineQueryResponseUnMarshaller::__init();
