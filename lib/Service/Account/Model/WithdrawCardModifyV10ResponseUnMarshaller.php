<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawCardModifyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawCardModifyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawCardModifyV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawCardModifyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawCardModifyV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawCardModifyV10Response();
    }
}

WithdrawCardModifyV10ResponseUnMarshaller::__init();
