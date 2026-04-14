<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantInfoModifyQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantInfoModifyQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantInfoModifyQueryResponseUnMarshaller();
    }

    /**
     * @return MerchantInfoModifyQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantInfoModifyQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantInfoModifyQueryResponse();
    }
}

MerchantInfoModifyQueryResponseUnMarshaller::__init();
