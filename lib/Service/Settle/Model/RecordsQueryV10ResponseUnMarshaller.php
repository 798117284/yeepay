<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordsQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordsQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordsQueryV10ResponseUnMarshaller();
    }

    /**
     * @return RecordsQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordsQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new RecordsQueryV10Response();
    }
}

RecordsQueryV10ResponseUnMarshaller::__init();
