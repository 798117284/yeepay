<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeAccountBookQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeAccountBookQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeAccountBookQueryV10ResponseUnMarshaller();
    }

    /**
     * @return RechargeAccountBookQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeAccountBookQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new RechargeAccountBookQueryV10Response();
    }
}

RechargeAccountBookQueryV10ResponseUnMarshaller::__init();
