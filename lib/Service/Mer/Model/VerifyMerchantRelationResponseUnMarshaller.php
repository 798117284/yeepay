<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class VerifyMerchantRelationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var VerifyMerchantRelationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new VerifyMerchantRelationResponseUnMarshaller();
    }

    /**
     * @return VerifyMerchantRelationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return VerifyMerchantRelationResponse
     */
    protected function getResponseInstance()
    {
        return new VerifyMerchantRelationResponse();
    }
}

VerifyMerchantRelationResponseUnMarshaller::__init();
