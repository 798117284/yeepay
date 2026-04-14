<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitAutoGoodsCodeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitAutoGoodsCodeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitAutoGoodsCodeQueryResponseUnMarshaller();
    }

    /**
     * @return DigitAutoGoodsCodeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitAutoGoodsCodeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitAutoGoodsCodeQueryResponse();
    }
}

DigitAutoGoodsCodeQueryResponseUnMarshaller::__init();
