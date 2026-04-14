<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantDisposeUnfreezeV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantDisposeUnfreezeV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantDisposeUnfreezeV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantDisposeUnfreezeV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantDisposeUnfreezeV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantDisposeUnfreezeV10Response();
    }
}

MerchantDisposeUnfreezeV10ResponseUnMarshaller::__init();
