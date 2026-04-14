<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PreauthCompleteResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PreauthCompleteResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PreauthCompleteResponseUnMarshaller();
    }

    /**
     * @return PreauthCompleteResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PreauthCompleteResponse
     */
    protected function getResponseInstance()
    {
        return new PreauthCompleteResponse();
    }
}

PreauthCompleteResponseUnMarshaller::__init();
