<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBalacneQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBalacneQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBalacneQueryResponseUnMarshaller();
    }

    /**
     * @return AccountBalacneQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBalacneQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBalacneQueryResponse();
    }
}

AccountBalacneQueryResponseUnMarshaller::__init();
