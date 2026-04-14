<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PreauthRepealV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PreauthRepealV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PreauthRepealV10ResponseUnMarshaller();
    }

    /**
     * @return PreauthRepealV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PreauthRepealV10Response
     */
    protected function getResponseInstance()
    {
        return new PreauthRepealV10Response();
    }
}

PreauthRepealV10ResponseUnMarshaller::__init();
