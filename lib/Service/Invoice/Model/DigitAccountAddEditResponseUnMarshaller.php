<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitAccountAddEditResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitAccountAddEditResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitAccountAddEditResponseUnMarshaller();
    }

    /**
     * @return DigitAccountAddEditResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitAccountAddEditResponse
     */
    protected function getResponseInstance()
    {
        return new DigitAccountAddEditResponse();
    }
}

DigitAccountAddEditResponseUnMarshaller::__init();
