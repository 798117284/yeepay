<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetClearAccountInfoByMerchantResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetClearAccountInfoByMerchantResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetClearAccountInfoByMerchantResponseUnMarshaller();
    }

    /**
     * @return GetClearAccountInfoByMerchantResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetClearAccountInfoByMerchantResponse
     */
    protected function getResponseInstance()
    {
        return new GetClearAccountInfoByMerchantResponse();
    }
}

GetClearAccountInfoByMerchantResponseUnMarshaller::__init();
