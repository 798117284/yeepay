<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawCardQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawCardQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawCardQueryV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawCardQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawCardQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawCardQueryV10Response();
    }
}

WithdrawCardQueryV10ResponseUnMarshaller::__init();
