<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ENTERPRISEAUTHResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ENTERPRISEAUTHResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ENTERPRISEAUTHResponseUnMarshaller();
    }

    /**
     * @return ENTERPRISEAUTHResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ENTERPRISEAUTHResponse
     */
    protected function getResponseInstance()
    {
        return new ENTERPRISEAUTHResponse();
    }
}

ENTERPRISEAUTHResponseUnMarshaller::__init();
