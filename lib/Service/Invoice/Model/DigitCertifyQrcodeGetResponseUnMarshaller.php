<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitCertifyQrcodeGetResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitCertifyQrcodeGetResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitCertifyQrcodeGetResponseUnMarshaller();
    }

    /**
     * @return DigitCertifyQrcodeGetResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitCertifyQrcodeGetResponse
     */
    protected function getResponseInstance()
    {
        return new DigitCertifyQrcodeGetResponse();
    }
}

DigitCertifyQrcodeGetResponseUnMarshaller::__init();
