<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryAccountUpdateResultResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryAccountUpdateResultResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryAccountUpdateResultResponseUnMarshaller();
    }

    /**
     * @return QueryAccountUpdateResultResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryAccountUpdateResultResponse
     */
    protected function getResponseInstance()
    {
        return new QueryAccountUpdateResultResponse();
    }
}

QueryAccountUpdateResultResponseUnMarshaller::__init();
