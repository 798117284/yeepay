<?php

namespace Yeepay\Yop\Sdk\Service\Recharge\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryV10Response();
    }
}

BankAccountQueryV10ResponseUnMarshaller::__init();
