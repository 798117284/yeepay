<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenAccountRequestQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenAccountRequestQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenAccountRequestQueryResponseUnMarshaller();
    }

    /**
     * @return OpenAccountRequestQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenAccountRequestQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OpenAccountRequestQueryResponse();
    }
}

OpenAccountRequestQueryResponseUnMarshaller::__init();
