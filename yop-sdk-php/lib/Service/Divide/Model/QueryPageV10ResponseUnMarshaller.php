<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryPageV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryPageV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryPageV10ResponseUnMarshaller();
    }

    /**
     * @return QueryPageV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryPageV10Response
     */
    protected function getResponseInstance()
    {
        return new QueryPageV10Response();
    }
}

QueryPageV10ResponseUnMarshaller::__init();
