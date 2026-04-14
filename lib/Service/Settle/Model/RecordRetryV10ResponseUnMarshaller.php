<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordRetryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordRetryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordRetryV10ResponseUnMarshaller();
    }

    /**
     * @return RecordRetryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordRetryV10Response
     */
    protected function getResponseInstance()
    {
        return new RecordRetryV10Response();
    }
}

RecordRetryV10ResponseUnMarshaller::__init();
