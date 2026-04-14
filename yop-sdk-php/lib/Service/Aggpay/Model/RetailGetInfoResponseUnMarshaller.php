<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RetailGetInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RetailGetInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RetailGetInfoResponseUnMarshaller();
    }

    /**
     * @return RetailGetInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RetailGetInfoResponse
     */
    protected function getResponseInstance()
    {
        return new RetailGetInfoResponse();
    }
}

RetailGetInfoResponseUnMarshaller::__init();
