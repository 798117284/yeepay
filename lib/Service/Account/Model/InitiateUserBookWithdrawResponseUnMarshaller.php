<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InitiateUserBookWithdrawResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InitiateUserBookWithdrawResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InitiateUserBookWithdrawResponseUnMarshaller();
    }

    /**
     * @return InitiateUserBookWithdrawResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InitiateUserBookWithdrawResponse
     */
    protected function getResponseInstance()
    {
        return new InitiateUserBookWithdrawResponse();
    }
}

InitiateUserBookWithdrawResponseUnMarshaller::__init();
