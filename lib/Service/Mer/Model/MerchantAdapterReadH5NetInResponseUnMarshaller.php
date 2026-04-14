<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantAdapterReadH5NetInResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantAdapterReadH5NetInResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAdapterReadH5NetInResponseUnMarshaller();
    }

    /**
     * @return MerchantAdapterReadH5NetInResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantAdapterReadH5NetInResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantAdapterReadH5NetInResponse();
    }
}

MerchantAdapterReadH5NetInResponseUnMarshaller::__init();
