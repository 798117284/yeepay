<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawRuleSetV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawRuleSetV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawRuleSetV10ResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawRuleSetV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawRuleSetV10Response
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawRuleSetV10Response();
    }
}

AutoWithdrawRuleSetV10ResponseUnMarshaller::__init();
