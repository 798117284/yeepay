<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantRectificationResultQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantRectificationResultQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantRectificationResultQueryResponseUnMarshaller();
    }

    /**
     * @return MerchantRectificationResultQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantRectificationResultQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantRectificationResultQueryResponse();
    }
}

MerchantRectificationResultQueryResponseUnMarshaller::__init();
