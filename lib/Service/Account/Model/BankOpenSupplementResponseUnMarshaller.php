<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankOpenSupplementResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankOpenSupplementResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankOpenSupplementResponseUnMarshaller();
    }

    /**
     * @return BankOpenSupplementResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankOpenSupplementResponse
     */
    protected function getResponseInstance()
    {
        return new BankOpenSupplementResponse();
    }
}

BankOpenSupplementResponseUnMarshaller::__init();
