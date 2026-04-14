<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QuerySignInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QuerySignInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QuerySignInfoResponseUnMarshaller();
    }

    /**
     * @return QuerySignInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QuerySignInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QuerySignInfoResponse();
    }
}

QuerySignInfoResponseUnMarshaller::__init();
