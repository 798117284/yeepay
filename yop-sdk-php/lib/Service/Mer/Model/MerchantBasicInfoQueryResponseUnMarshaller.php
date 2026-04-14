<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantBasicInfoQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantBasicInfoQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantBasicInfoQueryResponseUnMarshaller();
    }

    /**
     * @return MerchantBasicInfoQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantBasicInfoQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantBasicInfoQueryResponse();
    }
}

MerchantBasicInfoQueryResponseUnMarshaller::__init();
