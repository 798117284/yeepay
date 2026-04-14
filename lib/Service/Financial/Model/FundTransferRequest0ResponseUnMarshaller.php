<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundTransferRequest0ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundTransferRequest0ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundTransferRequest0ResponseUnMarshaller();
    }

    /**
     * @return FundTransferRequest0ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundTransferRequest0Response
     */
    protected function getResponseInstance()
    {
        return new FundTransferRequest0Response();
    }
}

FundTransferRequest0ResponseUnMarshaller::__init();
