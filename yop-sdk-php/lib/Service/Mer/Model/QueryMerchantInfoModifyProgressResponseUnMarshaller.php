<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryMerchantInfoModifyProgressResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryMerchantInfoModifyProgressResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryMerchantInfoModifyProgressResponseUnMarshaller();
    }

    /**
     * @return QueryMerchantInfoModifyProgressResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryMerchantInfoModifyProgressResponse
     */
    protected function getResponseInstance()
    {
        return new QueryMerchantInfoModifyProgressResponse();
    }
}

QueryMerchantInfoModifyProgressResponseUnMarshaller::__init();
