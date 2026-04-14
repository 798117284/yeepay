<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryAccountInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryAccountInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryAccountInfoResponseUnMarshaller();
    }

    /**
     * @return QueryAccountInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryAccountInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryAccountInfoResponse();
    }
}

QueryAccountInfoResponseUnMarshaller::__init();
