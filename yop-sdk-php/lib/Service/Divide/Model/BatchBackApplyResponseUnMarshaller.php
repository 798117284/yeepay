<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BatchBackApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BatchBackApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BatchBackApplyResponseUnMarshaller();
    }

    /**
     * @return BatchBackApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BatchBackApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BatchBackApplyResponse();
    }
}

BatchBackApplyResponseUnMarshaller::__init();
