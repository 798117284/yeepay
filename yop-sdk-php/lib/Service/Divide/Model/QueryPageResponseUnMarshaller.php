<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryPageResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryPageResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryPageResponseUnMarshaller();
    }

    /**
     * @return QueryPageResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryPageResponse
     */
    protected function getResponseInstance()
    {
        return new QueryPageResponse();
    }
}

QueryPageResponseUnMarshaller::__init();
