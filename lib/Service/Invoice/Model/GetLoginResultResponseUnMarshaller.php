<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetLoginResultResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetLoginResultResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetLoginResultResponseUnMarshaller();
    }

    /**
     * @return GetLoginResultResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetLoginResultResponse
     */
    protected function getResponseInstance()
    {
        return new GetLoginResultResponse();
    }
}

GetLoginResultResponseUnMarshaller::__init();
