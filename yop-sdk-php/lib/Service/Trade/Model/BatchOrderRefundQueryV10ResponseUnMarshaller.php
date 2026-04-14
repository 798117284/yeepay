<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BatchOrderRefundQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BatchOrderRefundQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BatchOrderRefundQueryV10ResponseUnMarshaller();
    }

    /**
     * @return BatchOrderRefundQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BatchOrderRefundQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new BatchOrderRefundQueryV10Response();
    }
}

BatchOrderRefundQueryV10ResponseUnMarshaller::__init();
