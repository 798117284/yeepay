<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetclearaccountinfoymerchantResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetclearaccountinfoymerchantResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetclearaccountinfoymerchantResponseUnMarshaller();
    }

    /**
     * @return GetclearaccountinfoymerchantResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetclearaccountinfoymerchantResponse
     */
    protected function getResponseInstance()
    {
        return new GetclearaccountinfoymerchantResponse();
    }
}

GetclearaccountinfoymerchantResponseUnMarshaller::__init();
