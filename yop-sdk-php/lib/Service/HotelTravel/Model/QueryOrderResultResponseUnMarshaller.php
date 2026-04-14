<?php

namespace Yeepay\Yop\Sdk\Service\HotelTravel\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryOrderResultResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryOrderResultResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryOrderResultResponseUnMarshaller();
    }

    /**
     * @return QueryOrderResultResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryOrderResultResponse
     */
    protected function getResponseInstance()
    {
        return new QueryOrderResultResponse();
    }
}

QueryOrderResultResponseUnMarshaller::__init();
