<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankActivityQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankActivityQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankActivityQueryResponseUnMarshaller();
    }

    /**
     * @return BankActivityQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankActivityQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BankActivityQueryResponse();
    }
}

BankActivityQueryResponseUnMarshaller::__init();
