<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitAutoTitleQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitAutoTitleQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitAutoTitleQueryResponseUnMarshaller();
    }

    /**
     * @return DigitAutoTitleQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitAutoTitleQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitAutoTitleQueryResponse();
    }
}

DigitAutoTitleQueryResponseUnMarshaller::__init();
