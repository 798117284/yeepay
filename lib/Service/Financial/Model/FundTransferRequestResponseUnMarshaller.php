<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundTransferRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundTransferRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundTransferRequestResponseUnMarshaller();
    }

    /**
     * @return FundTransferRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundTransferRequestResponse
     */
    protected function getResponseInstance()
    {
        return new FundTransferRequestResponse();
    }
}

FundTransferRequestResponseUnMarshaller::__init();
