<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryFankeAccessTokenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryFankeAccessTokenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryFankeAccessTokenResponseUnMarshaller();
    }

    /**
     * @return QueryFankeAccessTokenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryFankeAccessTokenResponse
     */
    protected function getResponseInstance()
    {
        return new QueryFankeAccessTokenResponse();
    }
}

QueryFankeAccessTokenResponseUnMarshaller::__init();
