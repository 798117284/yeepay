<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BatchOrderRefundV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BatchOrderRefundV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BatchOrderRefundV10ResponseUnMarshaller();
    }

    /**
     * @return BatchOrderRefundV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BatchOrderRefundV10Response
     */
    protected function getResponseInstance()
    {
        return new BatchOrderRefundV10Response();
    }
}

BatchOrderRefundV10ResponseUnMarshaller::__init();
