<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceReceiptResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceReceiptResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceReceiptResponseUnMarshaller();
    }

    /**
     * @return BalanceReceiptResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceReceiptResponse
     */
    protected function getResponseInstance()
    {
        return new BalanceReceiptResponse();
    }
}

BalanceReceiptResponseUnMarshaller::__init();
