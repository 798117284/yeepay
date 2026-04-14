<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryFanKeAccessTokenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryFanKeAccessTokenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryFanKeAccessTokenResponseUnMarshaller();
    }

    /**
     * @return QueryFanKeAccessTokenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryFanKeAccessTokenResponse
     */
    protected function getResponseInstance()
    {
        return new QueryFanKeAccessTokenResponse();
    }
}

QueryFanKeAccessTokenResponseUnMarshaller::__init();
