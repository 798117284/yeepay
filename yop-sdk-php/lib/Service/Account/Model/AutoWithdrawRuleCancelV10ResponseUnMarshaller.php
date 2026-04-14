<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawRuleCancelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawRuleCancelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawRuleCancelV10ResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawRuleCancelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawRuleCancelV10Response
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawRuleCancelV10Response();
    }
}

AutoWithdrawRuleCancelV10ResponseUnMarshaller::__init();
