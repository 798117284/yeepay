<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordQueryV10ResponseUnMarshaller();
    }

    /**
     * @return RecordQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new RecordQueryV10Response();
    }
}

RecordQueryV10ResponseUnMarshaller::__init();
