<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitQrcodeCertifyResultGetResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitQrcodeCertifyResultGetResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitQrcodeCertifyResultGetResponseUnMarshaller();
    }

    /**
     * @return DigitQrcodeCertifyResultGetResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitQrcodeCertifyResultGetResponse
     */
    protected function getResponseInstance()
    {
        return new DigitQrcodeCertifyResultGetResponse();
    }
}

DigitQrcodeCertifyResultGetResponseUnMarshaller::__init();
