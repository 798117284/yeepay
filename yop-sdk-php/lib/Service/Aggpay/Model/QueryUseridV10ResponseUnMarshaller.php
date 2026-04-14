<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryUseridV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryUseridV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryUseridV10ResponseUnMarshaller();
    }

    /**
     * @return QueryUseridV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryUseridV10Response
     */
    protected function getResponseInstance()
    {
        return new QueryUseridV10Response();
    }
}

QueryUseridV10ResponseUnMarshaller::__init();
