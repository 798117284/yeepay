<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DownloadQrCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DownloadQrCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DownloadQrCodeResponseUnMarshaller();
    }

    /**
     * @return DownloadQrCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DownloadQrCodeResponse
     */
    protected function getResponseInstance()
    {
        return new DownloadQrCodeResponse();
    }
}

DownloadQrCodeResponseUnMarshaller::__init();
