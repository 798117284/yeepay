<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantWechatauthApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantWechatauthApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantWechatauthApplyResponseUnMarshaller();
    }

    /**
     * @return MerchantWechatauthApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantWechatauthApplyResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantWechatauthApplyResponse();
    }
}

MerchantWechatauthApplyResponseUnMarshaller::__init();
