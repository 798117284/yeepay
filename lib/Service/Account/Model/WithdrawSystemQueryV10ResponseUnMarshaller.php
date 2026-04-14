<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawSystemQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawSystemQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawSystemQueryV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawSystemQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawSystemQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawSystemQueryV10Response();
    }
}

WithdrawSystemQueryV10ResponseUnMarshaller::__init();
