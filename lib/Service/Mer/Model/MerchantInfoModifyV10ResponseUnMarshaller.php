<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantInfoModifyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantInfoModifyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantInfoModifyV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantInfoModifyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantInfoModifyV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantInfoModifyV10Response();
    }
}

MerchantInfoModifyV10ResponseUnMarshaller::__init();
