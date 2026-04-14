<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CloneMerchantResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CloneMerchantResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CloneMerchantResponseUnMarshaller();
    }

    /**
     * @return CloneMerchantResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CloneMerchantResponse
     */
    protected function getResponseInstance()
    {
        return new CloneMerchantResponse();
    }
}

CloneMerchantResponseUnMarshaller::__init();
