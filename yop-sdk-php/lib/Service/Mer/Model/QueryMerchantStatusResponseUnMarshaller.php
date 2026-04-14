<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryMerchantStatusResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryMerchantStatusResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryMerchantStatusResponseUnMarshaller();
    }

    /**
     * @return QueryMerchantStatusResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryMerchantStatusResponse
     */
    protected function getResponseInstance()
    {
        return new QueryMerchantStatusResponse();
    }
}

QueryMerchantStatusResponseUnMarshaller::__init();
