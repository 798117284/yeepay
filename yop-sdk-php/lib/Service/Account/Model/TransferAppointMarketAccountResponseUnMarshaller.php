<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferAppointMarketAccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferAppointMarketAccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferAppointMarketAccountResponseUnMarshaller();
    }

    /**
     * @return TransferAppointMarketAccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferAppointMarketAccountResponse
     */
    protected function getResponseInstance()
    {
        return new TransferAppointMarketAccountResponse();
    }
}

TransferAppointMarketAccountResponseUnMarshaller::__init();
