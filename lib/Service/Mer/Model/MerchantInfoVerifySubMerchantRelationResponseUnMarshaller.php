<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantInfoVerifySubMerchantRelationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantInfoVerifySubMerchantRelationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantInfoVerifySubMerchantRelationResponseUnMarshaller();
    }

    /**
     * @return MerchantInfoVerifySubMerchantRelationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantInfoVerifySubMerchantRelationResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantInfoVerifySubMerchantRelationResponse();
    }
}

MerchantInfoVerifySubMerchantRelationResponseUnMarshaller::__init();
