<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundTransferQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundTransferQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundTransferQueryResponseUnMarshaller();
    }

    /**
     * @return FundTransferQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundTransferQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FundTransferQueryResponse();
    }
}

FundTransferQueryResponseUnMarshaller::__init();
