<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountRemitReverseQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountRemitReverseQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountRemitReverseQueryResponseUnMarshaller();
    }

    /**
     * @return AccountRemitReverseQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountRemitReverseQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountRemitReverseQueryResponse();
    }
}

AccountRemitReverseQueryResponseUnMarshaller::__init();
