<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryQrCodeListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryQrCodeListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryQrCodeListResponseUnMarshaller();
    }

    /**
     * @return QueryQrCodeListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryQrCodeListResponse
     */
    protected function getResponseInstance()
    {
        return new QueryQrCodeListResponse();
    }
}

QueryQrCodeListResponseUnMarshaller::__init();
