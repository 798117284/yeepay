<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankaccountbalancequeryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankaccountbalancequeryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankaccountbalancequeryResponseUnMarshaller();
    }

    /**
     * @return BankaccountbalancequeryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankaccountbalancequeryResponse
     */
    protected function getResponseInstance()
    {
        return new BankaccountbalancequeryResponse();
    }
}

BankaccountbalancequeryResponseUnMarshaller::__init();
