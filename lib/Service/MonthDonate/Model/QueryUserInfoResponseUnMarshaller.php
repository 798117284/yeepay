<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryUserInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryUserInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryUserInfoResponseUnMarshaller();
    }

    /**
     * @return QueryUserInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryUserInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryUserInfoResponse();
    }
}

QueryUserInfoResponseUnMarshaller::__init();
