<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitalAccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitalAccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitalAccountQueryResponseUnMarshaller();
    }

    /**
     * @return DigitalAccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitalAccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitalAccountQueryResponse();
    }
}

DigitalAccountQueryResponseUnMarshaller::__init();
