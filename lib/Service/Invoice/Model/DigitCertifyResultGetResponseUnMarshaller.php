<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitCertifyResultGetResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitCertifyResultGetResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitCertifyResultGetResponseUnMarshaller();
    }

    /**
     * @return DigitCertifyResultGetResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitCertifyResultGetResponse
     */
    protected function getResponseInstance()
    {
        return new DigitCertifyResultGetResponse();
    }
}

DigitCertifyResultGetResponseUnMarshaller::__init();
