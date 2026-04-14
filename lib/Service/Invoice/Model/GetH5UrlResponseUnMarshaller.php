<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetH5UrlResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetH5UrlResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetH5UrlResponseUnMarshaller();
    }

    /**
     * @return GetH5UrlResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetH5UrlResponse
     */
    protected function getResponseInstance()
    {
        return new GetH5UrlResponse();
    }
}

GetH5UrlResponseUnMarshaller::__init();
