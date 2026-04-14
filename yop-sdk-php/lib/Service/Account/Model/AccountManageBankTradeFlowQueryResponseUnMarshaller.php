<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBankTradeFlowQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBankTradeFlowQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBankTradeFlowQueryResponseUnMarshaller();
    }

    /**
     * @return AccountManageBankTradeFlowQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBankTradeFlowQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageBankTradeFlowQueryResponse();
    }
}

AccountManageBankTradeFlowQueryResponseUnMarshaller::__init();
