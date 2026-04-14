<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundTransferReuestQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundTransferReuestQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundTransferReuestQueryResponseUnMarshaller();
    }

    /**
     * @return FundTransferReuestQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundTransferReuestQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FundTransferReuestQueryResponse();
    }
}

FundTransferReuestQueryResponseUnMarshaller::__init();
