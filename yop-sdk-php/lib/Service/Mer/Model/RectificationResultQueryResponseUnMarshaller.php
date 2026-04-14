<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RectificationResultQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RectificationResultQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RectificationResultQueryResponseUnMarshaller();
    }

    /**
     * @return RectificationResultQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RectificationResultQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RectificationResultQueryResponse();
    }
}

RectificationResultQueryResponseUnMarshaller::__init();
