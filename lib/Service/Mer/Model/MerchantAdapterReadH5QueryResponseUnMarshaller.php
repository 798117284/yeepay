<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantAdapterReadH5QueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantAdapterReadH5QueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAdapterReadH5QueryResponseUnMarshaller();
    }

    /**
     * @return MerchantAdapterReadH5QueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantAdapterReadH5QueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantAdapterReadH5QueryResponse();
    }
}

MerchantAdapterReadH5QueryResponseUnMarshaller::__init();
