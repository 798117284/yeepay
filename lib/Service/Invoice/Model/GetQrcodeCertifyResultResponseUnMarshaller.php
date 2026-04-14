<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetQrcodeCertifyResultResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetQrcodeCertifyResultResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetQrcodeCertifyResultResponseUnMarshaller();
    }

    /**
     * @return GetQrcodeCertifyResultResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetQrcodeCertifyResultResponse
     */
    protected function getResponseInstance()
    {
        return new GetQrcodeCertifyResultResponse();
    }
}

GetQrcodeCertifyResultResponseUnMarshaller::__init();
