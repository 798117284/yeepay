<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordRetryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordRetryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordRetryResponseUnMarshaller();
    }

    /**
     * @return RecordRetryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordRetryResponse
     */
    protected function getResponseInstance()
    {
        return new RecordRetryResponse();
    }
}

RecordRetryResponseUnMarshaller::__init();
