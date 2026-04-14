<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenbankaccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenbankaccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenbankaccountResponseUnMarshaller();
    }

    /**
     * @return OpenbankaccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenbankaccountResponse
     */
    protected function getResponseInstance()
    {
        return new OpenbankaccountResponse();
    }
}

OpenbankaccountResponseUnMarshaller::__init();
