<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitalAccountAddEditResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitalAccountAddEditResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitalAccountAddEditResponseUnMarshaller();
    }

    /**
     * @return DigitalAccountAddEditResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitalAccountAddEditResponse
     */
    protected function getResponseInstance()
    {
        return new DigitalAccountAddEditResponse();
    }
}

DigitalAccountAddEditResponseUnMarshaller::__init();
