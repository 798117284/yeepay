<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryAreaResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryAreaResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryAreaResponseUnMarshaller();
    }

    /**
     * @return QueryAreaResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryAreaResponse
     */
    protected function getResponseInstance()
    {
        return new QueryAreaResponse();
    }
}

QueryAreaResponseUnMarshaller::__init();
