<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryV10ResponseUnMarshaller();
    }

    /**
     * @return QueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryV10Response
     */
    protected function getResponseInstance()
    {
        return new QueryV10Response();
    }
}

QueryV10ResponseUnMarshaller::__init();
