<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantSupplementQualificationSubmitV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantSupplementQualificationSubmitV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantSupplementQualificationSubmitV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantSupplementQualificationSubmitV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantSupplementQualificationSubmitV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantSupplementQualificationSubmitV10Response();
    }
}

MerchantSupplementQualificationSubmitV10ResponseUnMarshaller::__init();
