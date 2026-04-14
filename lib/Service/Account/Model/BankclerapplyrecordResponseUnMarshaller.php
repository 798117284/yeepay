<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankclerapplyrecordResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankclerapplyrecordResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankclerapplyrecordResponseUnMarshaller();
    }

    /**
     * @return BankclerapplyrecordResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankclerapplyrecordResponse
     */
    protected function getResponseInstance()
    {
        return new BankclerapplyrecordResponse();
    }
}

BankclerapplyrecordResponseUnMarshaller::__init();
