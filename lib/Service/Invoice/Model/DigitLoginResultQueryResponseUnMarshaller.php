<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitLoginResultQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitLoginResultQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitLoginResultQueryResponseUnMarshaller();
    }

    /**
     * @return DigitLoginResultQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitLoginResultQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitLoginResultQueryResponse();
    }
}

DigitLoginResultQueryResponseUnMarshaller::__init();
