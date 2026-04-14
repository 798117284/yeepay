<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawCardBindV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawCardBindV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawCardBindV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawCardBindV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawCardBindV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawCardBindV10Response();
    }
}

WithdrawCardBindV10ResponseUnMarshaller::__init();
