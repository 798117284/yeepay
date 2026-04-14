<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryQrcodeListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryQrcodeListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryQrcodeListResponseUnMarshaller();
    }

    /**
     * @return QueryQrcodeListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryQrcodeListResponse
     */
    protected function getResponseInstance()
    {
        return new QueryQrcodeListResponse();
    }
}

QueryQrcodeListResponseUnMarshaller::__init();
