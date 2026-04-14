<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryMerchantBasicInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryMerchantBasicInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryMerchantBasicInfoResponseUnMarshaller();
    }

    /**
     * @return QueryMerchantBasicInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryMerchantBasicInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryMerchantBasicInfoResponse();
    }
}

QueryMerchantBasicInfoResponseUnMarshaller::__init();
