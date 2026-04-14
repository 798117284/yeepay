<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryBindCardListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryBindCardListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryBindCardListResponseUnMarshaller();
    }

    /**
     * @return QueryBindCardListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryBindCardListResponse
     */
    protected function getResponseInstance()
    {
        return new QueryBindCardListResponse();
    }
}

QueryBindCardListResponseUnMarshaller::__init();
