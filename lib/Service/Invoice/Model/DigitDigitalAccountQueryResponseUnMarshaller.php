<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitDigitalAccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitDigitalAccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitDigitalAccountQueryResponseUnMarshaller();
    }

    /**
     * @return DigitDigitalAccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitDigitalAccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitDigitalAccountQueryResponse();
    }
}

DigitDigitalAccountQueryResponseUnMarshaller::__init();
