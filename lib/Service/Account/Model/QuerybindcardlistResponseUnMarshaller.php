<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QuerybindcardlistResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QuerybindcardlistResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QuerybindcardlistResponseUnMarshaller();
    }

    /**
     * @return QuerybindcardlistResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QuerybindcardlistResponse
     */
    protected function getResponseInstance()
    {
        return new QuerybindcardlistResponse();
    }
}

QuerybindcardlistResponseUnMarshaller::__init();
