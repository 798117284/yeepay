<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoGoodsCodeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoGoodsCodeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoGoodsCodeQueryResponseUnMarshaller();
    }

    /**
     * @return AutoGoodsCodeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoGoodsCodeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AutoGoodsCodeQueryResponse();
    }
}

AutoGoodsCodeQueryResponseUnMarshaller::__init();
