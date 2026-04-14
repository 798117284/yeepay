<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PreauthCompleteRepealV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PreauthCompleteRepealV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PreauthCompleteRepealV10ResponseUnMarshaller();
    }

    /**
     * @return PreauthCompleteRepealV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PreauthCompleteRepealV10Response
     */
    protected function getResponseInstance()
    {
        return new PreauthCompleteRepealV10Response();
    }
}

PreauthCompleteRepealV10ResponseUnMarshaller::__init();
