<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApplyV10ResponseUnMarshaller();
    }

    /**
     * @return ApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new ApplyV10Response();
    }
}

ApplyV10ResponseUnMarshaller::__init();
