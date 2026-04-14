<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PreauthRepealResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PreauthRepealResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PreauthRepealResponseUnMarshaller();
    }

    /**
     * @return PreauthRepealResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PreauthRepealResponse
     */
    protected function getResponseInstance()
    {
        return new PreauthRepealResponse();
    }
}

PreauthRepealResponseUnMarshaller::__init();
