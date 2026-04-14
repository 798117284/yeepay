<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PreauthCompleteV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PreauthCompleteV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PreauthCompleteV10ResponseUnMarshaller();
    }

    /**
     * @return PreauthCompleteV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PreauthCompleteV10Response
     */
    protected function getResponseInstance()
    {
        return new PreauthCompleteV10Response();
    }
}

PreauthCompleteV10ResponseUnMarshaller::__init();
