<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DownloadQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DownloadQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DownloadQrcodeResponseUnMarshaller();
    }

    /**
     * @return DownloadQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DownloadQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new DownloadQrcodeResponse();
    }
}

DownloadQrcodeResponseUnMarshaller::__init();
