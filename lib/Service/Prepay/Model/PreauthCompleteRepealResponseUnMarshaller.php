<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PreauthCompleteRepealResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PreauthCompleteRepealResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PreauthCompleteRepealResponseUnMarshaller();
    }

    /**
     * @return PreauthCompleteRepealResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PreauthCompleteRepealResponse
     */
    protected function getResponseInstance()
    {
        return new PreauthCompleteRepealResponse();
    }
}

PreauthCompleteRepealResponseUnMarshaller::__init();
