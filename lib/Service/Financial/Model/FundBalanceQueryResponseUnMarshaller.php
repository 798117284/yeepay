<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundBalanceQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundBalanceQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundBalanceQueryResponseUnMarshaller();
    }

    /**
     * @return FundBalanceQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundBalanceQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FundBalanceQueryResponse();
    }
}

FundBalanceQueryResponseUnMarshaller::__init();
