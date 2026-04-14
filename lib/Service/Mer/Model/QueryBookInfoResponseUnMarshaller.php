<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryBookInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryBookInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryBookInfoResponseUnMarshaller();
    }

    /**
     * @return QueryBookInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryBookInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryBookInfoResponse();
    }
}

QueryBookInfoResponseUnMarshaller::__init();
