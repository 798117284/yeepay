<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompleteV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompleteV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompleteV10ResponseUnMarshaller();
    }

    /**
     * @return CompleteV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompleteV10Response
     */
    protected function getResponseInstance()
    {
        return new CompleteV10Response();
    }
}

CompleteV10ResponseUnMarshaller::__init();
