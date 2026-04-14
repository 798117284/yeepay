<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenAccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenAccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenAccountQueryResponseUnMarshaller();
    }

    /**
     * @return OpenAccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenAccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OpenAccountQueryResponse();
    }
}

OpenAccountQueryResponseUnMarshaller::__init();
