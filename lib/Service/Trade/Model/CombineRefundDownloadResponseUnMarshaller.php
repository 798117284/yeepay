<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CombineRefundDownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CombineRefundDownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CombineRefundDownloadResponseUnMarshaller();
    }

    /**
     * @return CombineRefundDownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CombineRefundDownloadResponse
     */
    protected function getResponseInstance()
    {
        return new CombineRefundDownloadResponse();
    }
}

CombineRefundDownloadResponseUnMarshaller::__init();
