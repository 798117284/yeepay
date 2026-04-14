<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyGrantQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyGrantQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyGrantQueryResponseUnMarshaller();
    }

    /**
     * @return SubsidyGrantQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyGrantQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyGrantQueryResponse();
    }
}

SubsidyGrantQueryResponseUnMarshaller::__init();
