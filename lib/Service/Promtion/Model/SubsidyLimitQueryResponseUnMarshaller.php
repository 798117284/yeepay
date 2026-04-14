<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyLimitQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyLimitQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyLimitQueryResponseUnMarshaller();
    }

    /**
     * @return SubsidyLimitQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyLimitQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyLimitQueryResponse();
    }
}

SubsidyLimitQueryResponseUnMarshaller::__init();
