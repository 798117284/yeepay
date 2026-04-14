<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QuerybindcardapplylistResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QuerybindcardapplylistResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QuerybindcardapplylistResponseUnMarshaller();
    }

    /**
     * @return QuerybindcardapplylistResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QuerybindcardapplylistResponse
     */
    protected function getResponseInstance()
    {
        return new QuerybindcardapplylistResponse();
    }
}

QuerybindcardapplylistResponseUnMarshaller::__init();
