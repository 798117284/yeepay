<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FeeQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FeeQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FeeQueryV10ResponseUnMarshaller();
    }

    /**
     * @return FeeQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FeeQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new FeeQueryV10Response();
    }
}

FeeQueryV10ResponseUnMarshaller::__init();
