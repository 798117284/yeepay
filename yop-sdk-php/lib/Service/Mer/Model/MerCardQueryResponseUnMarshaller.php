<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerCardQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerCardQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerCardQueryResponseUnMarshaller();
    }

    /**
     * @return MerCardQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerCardQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerCardQueryResponse();
    }
}

MerCardQueryResponseUnMarshaller::__init();
