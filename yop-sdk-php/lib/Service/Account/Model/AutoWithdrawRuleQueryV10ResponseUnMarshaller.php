<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawRuleQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawRuleQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawRuleQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawRuleQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawRuleQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawRuleQueryV10Response();
    }
}

AutoWithdrawRuleQueryV10ResponseUnMarshaller::__init();
